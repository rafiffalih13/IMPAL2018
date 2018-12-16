<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_inputadmin extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_login');
			$this->load->model('m_admin');
			$this->load->helper('form');
			$this->load->library('session');
			$this->load->library('form_validation');
		}

		public function index(){
			$this->load->view('v_inputadmin');
		}

		public function inputadmin(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');
			$nama = $this->input->post('nama');
			$no_hp = $this->input->post('no_hp');
			$username = 'adm_'.$username;

			$cekusername = $this->m_admin->cekuser($username);

			if ($cekusername == FALSE) {
				$datauser = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama,
					'no_hp' => $no_hp
				);

				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('pass', 'Password', 'required');
				$this->form_validation->set_rules('nama', 'Nama', 'required');
				$this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric',array('numeric' => 'You must fill Phone Number with numeric',));
				if ($this->form_validation->run() == TRUE)
                {
                    $this->m_admin->simpan_data($datauser,'user');
					$this->load->view("v_sukses");
                }
                else
                {
                    $this->load->view('v_gagal');
                }
				
			}else{
				$this->load->view('v_gagal');
			}
		}

	}
?>