<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_inputpartner extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			#$this->load->model('m_home');
			$this->load->model('m_login');
			$this->load->model('m_partner');
			$this->load->helper('form');
			$this->load->library('session');
			$this->load->library('form_validation');
		}

		public function index(){
			$this->load->view('v_inputpartner');
		}

		public function inputpartner(){
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

	}
?>