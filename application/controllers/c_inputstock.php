<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_inputstock extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			#$this->load->model('m_home');
			$this->load->model('m_login');
			$this->load->helper('form');
			$this->load->library('session');
		}

		public function index(){
			$this->load->view('v_inputstock');
		}

	}
?>