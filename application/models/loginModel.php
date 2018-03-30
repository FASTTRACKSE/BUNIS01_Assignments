<?php 
	
	class loginModel extends CI_Model{
		function checkLogin($id, $password){
			
			$this->db->where("id", $id);
			$this->db->where("password", $password);
			$query = $this->db->get('admin');

			if ($query->num_rows() > 0){
		        return true;
		    }
		    else{
		        return false;
		    }
		}
	}

 ?>