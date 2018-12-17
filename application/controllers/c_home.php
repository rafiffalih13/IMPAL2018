<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_home extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			#$this->load->model('m_home');
			$this->load->model('m_login');
			$this->load->helper('form');
			$this->load->library('session');
		}

		public function index(){
			$this->load->view('v_homepagedeluxetea');
		}
		public function inputstock(){
			redirect('c_inputstock/index');
		}
		public function deleteadmin(){
			redirect('c_deleteadmin/index');
		}
		public function inputadmin(){
			redirect('c_inputadmin/index');
		}
		public function deletepartner(){
			redirect('c_deletepartner/index');
		}
		public function editpartner(){
			$this->load->view('v_editpartner');
		}
		public function inputpartner(){
			redirect('c_inputpartner/index');
		}
		public function updatestock(){
			$this->load->view('v_updatestock');
		}
		public function updatestockpar(){
			$this->load->view('v_updatestockpar');
		}
		public function lihatstock(){
			$this->load->view('v_lihatstock');
		}
		public function lihatstockpar(){
			$this->load->view('v_lihatstockpar');
		}
	}
?>