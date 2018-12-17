<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_inputstock extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_partner');
			$this->load->model('m_login');
			$this->load->model('m_stock');
			$this->load->helper('form');
			$this->load->library('session');
		}

		public function index(){
			$data = array(
				'title' => 'HOME',
				'partner' => $this->m_partner->get_data_partner(),
				'stock' => $this->m_stock->get_data_rasa()
			);
			$this->load->view('v_inputstock',$data);
		}

		public function inputstock(){
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
				redirect('c_inputstock/index');
			    // records have been returned
			}
		}
	}
?>