<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class pemilikController extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_partner');
			$this->load->model('m_login');
			$this->load->model('m_stock');
			$this->load->helper('form');
			$this->load->library('session');
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

		public function v_lihatstockpar(){
			$username = $this->session->userdata('username');
			$query = $this->db->query("SELECT namatoko FROM partner WHERE username='$username';");
			$namatoko = $query->row()->namatoko;
			$data = array(
				'title' => 'HOME',
				'partner' => $this->m_partner->get_partner($username),
				'stockLemon' => $this->m_stock->get_stock_lemon($namatoko),
				'stockblack' => $this->m_stock->get_stock_black($namatoko),
				'stock' => $this->m_stock->get_data_rasa()
			);
			$this->load->view('v_lihatstockpar',$data);
		}

		public function updatestock(){
			$username = $this->session->userdata('username');
			$query = $this->db->query("SELECT namatoko FROM partner WHERE username='$username';");
			$namatoko = $query->row()->namatoko;
			$rasa = $this->input->post('rasa');
			$jumlah = $this->input->post('jml');
			$query = $this->db->query("SELECT stock2, stock1 FROM penjualan WHERE namatoko='$namatoko' AND rasa='$rasa';");
			$stock3 = $query->row()->stock2;
			$stock2 = $query->row()->stock1;
			$stock1 = $stock2-$jumlah;
			$this->m_stock->update_data($stock1, $stock2, $stock3,$namatoko, $rasa);
			redirect('partnerController/v_updatestockpar');
		}
	}
?>