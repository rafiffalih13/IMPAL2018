<?php
	class m_pemilik extends CI_Model{

		public function login($username, $password) {

            $condition = "username =" . "'" . $username . "' AND " . "password =" . "'" . $password . "'";
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            
            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
        }
        
        public function cekpass($pass){
        	$condition = "username ='own_saya' AND " . "password =" . "'" . $pass . "'";
        	$this->db->select('*');
	        $this->db->from('user');
	        $this->db->where($condition);
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