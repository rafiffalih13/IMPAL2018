<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_updatestock extends CI_Controller {
		
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
			$this->load->view('v_updatestock',$data);
		}

		public function update(){
			$namatoko = $this->input->post('toko');
			$rasa = $this->input->post('rasa');
			$jumlah = $this->input->post('jml');
			$this->m_stock->edit($namatoko, $jumlah, $rasa);
			redirect('c_updatestock/index');
		}
	}
?>