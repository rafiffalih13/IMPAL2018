<?php
	class m_partner extends CI_Model{

	 	public function simpan_data($data, $table){
	 		$this->db->insert($table,$data);
	 		// $query = $this->db->query("INSERT INTO penjualan  ;");
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

	 	public function get_data_partner() {
            $query = $this->db->query("SELECT username, namatoko FROM partner;");
			return $query->result();
        }

        public function get_partner($username){
        	$query = $this->db->query("SELECT user.username, nama FROM user JOIN partner ON user.username=partner.username WHERE user.username='$username' ;");
			return $query->result();
        }

        public function delete($username){
        	$this->db->where('username', $username);
			$this->db->delete('partner');
			$this->db->where('username', $username);
			$this->db->delete('user');
        }

        public function edit($username, $pass){
        	$this->db->query("UPDATE user SET password='$pass' WHERE username='$username';");
        }
 	}
?>