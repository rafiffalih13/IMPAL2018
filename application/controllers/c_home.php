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
			$this->load->view('v_inputstock');
		}
		public function deleteadmin(){
			$this->load->view('v_inputstock');
		}
		public function inputadmin(){
			$this->load->view('v_inputstock');
		}
		public function deletepartner(){
			$this->load->view('v_inputstock');
		}
		public function editpartner(){
			$this->load->view('v_inputstock');
		}
		public function inputpartner(){
			$this->load->view('v_inputstock');
		}
		public function updatestock(){
			$this->load->view('v_inputstock');
		}
		public function lihatstock(){
			$this->load->view('v_inputstock');
		}
	}
?>