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
			redirect('c_editpartner/index');
		}
		public function inputpartner(){
			redirect('c_inputpartner/index');
		}
		public function updatestock(){
			redirect('c_updatestock/index');
		}
		public function updatestockpar(){
			redirect('partnerController/v_updatestockpar');
		}
		public function lihatstock(){
			redirect('pemilikController/v_lihatstock');
		}
		public function lihatstockpar(){
			redirect('partnerController/v_lihatstockpar');
		}
	}
?>