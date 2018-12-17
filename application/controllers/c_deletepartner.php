<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_deletepartner extends CI_Controller {
		
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
			$this->load->view('v_deletepartner',$data);
		}

		public function delete(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			if ($this->m_pemilik->cekpass($pass)) {
				$query = $this->db->query("SELECT username, namatoko FROM partner WHERE username='$username';");
				$namatoko = $query->row()->namatoko;
				$this->m_stock->delete($namatoko);
				$this->m_partner->delete($username);
				$this->load->view('v_sukses');
			}else{
				$this->load->view('v_gagal');
			}
		
		}
	}
?>