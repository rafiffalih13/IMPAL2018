<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class pemilikController extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_partner');
			$this->load->model('m_pemilik');
			$this->load->model('m_admin');
			$this->load->model('m_login');
			$this->load->model('m_stock');
			$this->load->helper('form');
			$this->load->library('session');
			$this->load->library('form_validation');
		}

		public function v_deleteadmin(){
			$data = array(
				'title' => 'HOME',
				'admin' => $this->m_admin->get_data_admin()
			);
			$this->load->view('v_deleteadmin',$data);
		}

		public function v_inputstock(){
			$data = array(
				'title' => 'HOME',
				'partner' => $this->m_partner->get_data_partner(),
				'stock' => $this->m_stock->get_data_rasa()
			);
			$this->load->view('v_inputstock',$data);
		}

		public function v_lihatstock(){
			$namatoko = $this->input->post('toko');
			if ($username=NULL) {
				$data = array(
					'title' => '0',
					'namatoko' => '',
					'partner' => $this->m_partner->get_data_partner()
				);
				$this->load->view('v_lihatstock',$data);
			}else{
				$data = array(
					'title' => '1',
					'namatoko' => $namatoko,
					'partner' => $this->m_partner->get_data_partner(),
					'stockLemon' => $this->m_stock->get_stock_lemon($namatoko),
					'stockblack' => $this->m_stock->get_stock_black($namatoko)
				);
				$this->load->view('v_lihatstock',$data);

			}
		}

		public function v_inputadmin(){
			$this->load->view('v_inputadmin');
		}

		public function v_deletepartner(){
			$data = array(
				'title' => 'HOME',
				'partner' => $this->m_partner->get_data_partner(),
			);
			$this->load->view('v_deletepartner',$data);
		}

		public function v_editpartner(){
			$data = array(
				'title' => 'HOME',
				'partner' => $this->m_partner->get_data_partner(),
			);
			$this->load->view('v_editpartner',$data);
		}

		public function v_inputpartner(){
			$this->load->view('v_inputpartner');
		}

		public function v_updatestock(){
			$data = array(
				'title' => 'HOME',
				'partner' => $this->m_partner->get_data_partner(),
				'stock' => $this->m_stock->get_data_rasa()
			);
			$this->load->view('v_updatestock',$data);
		}

		public function c_deleteadmin(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			if ($this->m_pemilik->cekpass($pass)) {
				$this->m_admin->delete($username);
				$this->load->view('v_sukses');
			}else{
				$this->load->view('v_gagal');
			}
		}
		
		public function c_inputstock(){
			$namatoko = $this->input->post('toko');
			$rasa = $this->input->post('rasa');
			$jumlah = $this->input->post('jml');

			$stock = $this->db->query("SELECT stock1, stock2 FROM penjualan WHERE namatoko='$namatoko' AND rasa='$rasa';");
			if(empty($stock->result())){
			    $datastock = array(
					'namatoko' => $namatoko,
					'rasa' => $rasa,
					'stock1' => $jumlah,
					'stock2' => 0,
					'stock3' => 0,
				);
				
				$this->m_stock->simpan_data($datastock,'penjualan');
				$this->load->view('v_sukses');
			} else {
				
				$query = $this->db->query("SELECT stock2, stock1 FROM penjualan WHERE namatoko='$namatoko' AND rasa='$rasa';");
				$stock3 = $query->row()->stock2;
				$stock2 = $query->row()->stock1;
				$stock1 = $stock2+$jumlah;
				$datastock = array(
					'namatoko' => $namatoko,
					'rasa' => $rasa,
					'stock1' => $stock1,
					'stock2' => $stock2,
					'stock3' => $stock3
				);
				$this->m_stock->update_data($stock1, $stock2, $stock3,$namatoko, $rasa);
				$this->load->view('v_sukses');
				// redirect('c_inputstock/index');
			    // records have been returned
			}
		}

		public function c_inputadmin(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');
			$nama = $this->input->post('nama');
			$no_hp = $this->input->post('no_hp');
			$username = 'adm_'.$username;

			$cekusername = $this->m_admin->cekuser($username);

			if ($cekusername == FALSE) {
				$datauser = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama,
					'no_hp' => $no_hp
				);

				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('pass', 'Password', 'required');
				$this->form_validation->set_rules('nama', 'Nama', 'required');
				$this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric',array('numeric' => 'You must fill Phone Number with numeric',));
				if ($this->form_validation->run() == TRUE)
                {
                    $this->m_admin->simpan_data($datauser,'user');
					$this->load->view("v_sukses");
                }
                else
                {
                    $this->load->view('v_gagal');
                }
				
			}else{
				$this->load->view('v_gagal');
			}
		}

		public function c_deletepartner(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			if ($this->m_pemilik->cekpass($pass)) {
				$query = $this->db->query("SELECT username, namatoko FROM partner WHERE username='$username';");
				$namatoko = $query->row()->namatoko;
				$this->m_stock->delete($namatoko);
				$this->m_partner->delete($username);
				$this->load->view('v_sukses');
			}else{
				$this->load->view('v_gagal');
			}
		}

		public function c_editpartner(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			$this->m_partner->edit($username,$pass);
			$this->load->view('v_sukses');
		}

		public function c_inputpartner(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');
			$nama = $this->input->post('nama');
			$toko = $this->input->post('toko');
			$alamat = $this->input->post('alamat');
			$no_hp = $this->input->post('no_hp');
			$username = 'usr_'.$username;

			$cekusername = $this->m_partner->cekuser($username);

			if ($cekusername == FALSE) {
				$datauser = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama,
					'no_hp' => $no_hp
				);

				$datapartner = array(
					'username' => $username,
					'namaToko' => $toko,
					'alamat' => $alamat
				 );
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('pass', 'Password', 'required');
				$this->form_validation->set_rules('nama', 'Nama', 'required');
				$this->form_validation->set_rules('toko', 'Nama Toko', 'required');
				$this->form_validation->set_rules('alamat', 'Alamat', 'required');
				$this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric',array('numeric' => 'You must fill Phone Number with numeric',));
				if ($this->form_validation->run() == TRUE)
                {
                    $this->m_partner->simpan_data($datauser,'user');
                    $this->m_partner->simpan_data($datapartner,'partner');
					$this->load->view("v_sukses");
                }
                else
                {
                    $this->load->view('v_gagal');
                }
				
			}else{
				$this->load->view('v_gagal');
			}
		}

		public function c_updatestock(){
			$namatoko = $this->input->post('toko');
			$rasa = $this->input->post('rasa');
			$jumlah = $this->input->post('jml');
			$this->m_stock->edit($namatoko, $jumlah, $rasa);
			redirect('pemilikController/v_updatestock');
		}
	}
?>