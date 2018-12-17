<?php
	class m_admin extends CI_Model{

	 	public function simpan_data($data, $table){
	 		$this->db->insert($table,$data);
	 	}

	 	public function cekuser($username){
	 		$this->db->select('username');
	 		$this->db->from('user');
	 		$this->db->where('username', $username);
	 		$this->db->limit(1);
	 		$query = $this->db->get();
	 		if ($query->num_rows() == 1) {
	            return true;
	        } else {
	            return false;
	        }
	 	}

	 	public function get_data_admin() {
            $query = $this->db->query("SELECT username, nama FROM user WHERE username LIKE 'adm_%';");
			return $query->result();
        }

        public function delete($username){
			$this->db->where('username', $username);
			$this->db->delete('user');
        }
 	}
?>