<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_daftar extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->model('m_user_partner');
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->library('session');
		}

		public function index(){
			$this->load->view("v_inputdatapartner");
		}

		function simpanPartner(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$nama_toko = $this->input->post('nama_toko');
			$alamat_toko = $this->input->post('alamat_toko');
			$no_hp = $this->input->post('no_hp');
			
			$cek = $this->c_input_ppartner->cekuser($username);


			if ($cek == FALSE) {
				$data = array(
					'username' => $username,
					'password' => $password,
					'nama' => $nama,
					'nama_toko' => $nama_toko,
					'alamat_toko' => $alamat_toko,
					'no_hp' => $no_hp
					
				);
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('cpass', 'Confirm Password', 'required|matches[pass]');
				$this->form_validation->set_rules('nama', 'Nama', 'required');
				$this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required');
				$this->form_validation->set_rules('alamat_toko', 'Alamat Toko', 'required');
				$this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric',array('numeric' => 'You must fill Phone Number with numeric',));
				

				if ($this->form_validation->run() == TRUE)
                {
                    $this->m_user_partner->simpan_data($data,'partner');
					$this->load->view("v_daftarsucsess");
                }
                else
                {
                    $this->load->view('v_daftarpartner');
                }
				
			}else{
				echo "gagal";
			}
		

		public function view_home(){
			redirect('c_home/index');
		}

		public function view_login(){
			redirect('c_login/index');
		}

	}
?>
