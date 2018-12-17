<?php
	class m_stock extends CI_Model{

	 	public function simpan_data($data, $table){
	 		$this->db->insert($table,$data);
	 	}

	 	public function update_data($stock1, $stock2, $stock3, $toko, $rasa){
	 		$this->db->query("UPDATE penjualan SET stock1='$stock1', stock2='$stock2', stock3='$stock3' WHERE namatoko='$toko' AND rasa='$rasa'");
	 	}

	 	public function get_data_rasa() {
            $query = $this->db->query("SELECT rasa FROM barang;");
			return $query->result();
        }

		public function get_data_stock($toko, $rasa) {
	 		$query = $this->db->query("SELECT stock1, stock2 FROM penjualan WHERE namatoko='$toko' AND rasa='$rasa';");
	 		if($query->num_rows == 1){
		        return $query->row();
		    }
		    return false;
        }

        public function delete($namatoko){
        	$this->db->where('namatoko', $namatoko);
			$this->db->delete('penjualan');
        }

        
 	}
?>