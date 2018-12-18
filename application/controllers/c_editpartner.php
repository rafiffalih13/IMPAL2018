<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_editpartner extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_partner');
			$this->load->model('m_pemilik');
			$this->load->model('m_stock');
			$this->load->helper('form');
			$this->load->library('session');
		}

		public function index(){
			$data = array(
				'title' => 'HOME',
				'partner' => $this->m_partner->get_data_partner(),
			);
			$this->load->view('v_editpartner',$data);
		}

		public function edit(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			$this->m_partner->edit($username,$pass);
			$this->load->view('v_sukses');
		}
	}
?>