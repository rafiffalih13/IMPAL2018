<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('m_login');
			
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->library('session');
		}
	
	public function index()
	{
		$this->load->view('v_login');
	}

	public function login() {
			
			
			// create the data object
			$data = new stdClass();
			
			// load form helper and validation library
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			// set validation rules
			$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if ($this->form_validation->run() == false) {
				//ISI SAMA HOME
				redirect('c_login/index');
				
			} else {
				
				// set variables from the form
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				if ($this->m_login->login($username, $password)) {
					$this->session->unset_userdata('username');
					
					$user_id = $this->m_login->get_user_id_from_username($username);
					$user    = $this->m_login->get_user($user_id);
					
					// set session user datas
					//$_SESSION['user_id']      = (int)$user->username;
					$this->session->set_userdata('username', $username);

					
					// user login ok
					redirect('c_home/index');
					
				} else {
					
					// login failed
					$data->error = 'Wrong username or password.';
					
					// send error to the view
					redirect('c_home/index');
					
				}
				
			}
			
		}
}
