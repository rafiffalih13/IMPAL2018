<?php
	class M_user_partner extends CI_Model{

	 	public function tampil_data(){
	 		return $this->db->get('partner');
	 	}

	 	public function simpan_data($data, $table){
	 		$this->db->insert($table,$data);
	 	}

	 	public function cekuser($user){
	 		$this->db->select('username');
	 		$this->db->from('partner');
	 		$this->db->where('username', $user);
	 		$this->db->limit(1);
	 		$query = $this->db->get();
	 		if ($query->num_rows() == 1) {
	            return true;
	        } else {
	            return false;
	        }
	 	}
 	}
?>
