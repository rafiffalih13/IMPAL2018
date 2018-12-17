<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_deleteadmin extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_admin');
			$this->load->model('m_pemilik');
			$this->load->helper('form');
			$this->load->library('session');
		}

		public function index(){
			$data = array(
				'title' => 'HOME',
				'admin' => $this->m_admin->get_data_admin()
			);
			$this->load->view('v_deleteadmin',$data);
		}

		public function delete(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			if ($this->m_pemilik->cekpass($pass)) {
				$this->m_admin->delete($username);
				$this->load->view('v_sukses');
			}else{
				$this->load->view('v_gagal');
			}
		
		}
	}
?>