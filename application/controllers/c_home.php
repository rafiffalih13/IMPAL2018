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
			redirect('pemilikController/v_inputstock');
		}
		public function deleteadmin(){
			redirect('pemilikController/v_deleteadmin');
		}
		public function inputadmin(){
			redirect('pemilikController/v_inputadmin');
		}
		public function deletepartner(){
			redirect('pemilikController/v_deletepartner');
		}
		public function editpartner(){
			redirect('pemilikController/v_editpartner');
		}
		public function inputpartner(){
			redirect('pemilikController/v_inputpartner');
		}
		public function updatestock(){
			redirect('pemilikController/v_updatestock');
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

		public function admininputstock(){
			redirect('adminController/v_inputstock');
		}
		public function admineditpartner(){
			redirect('adminController/v_editpartner');
		}
		public function adminlihatstock(){
			redirect('adminController/v_lihatstock');
		}
	}
?>