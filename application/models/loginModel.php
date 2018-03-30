<?php 
	
	class loginModel extends CI_Model{
		function checkLogin($username, $password){
			
			$this->db->where("username", $username);
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