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

		function getAdminDetail(){
			$query = $this->db->get('admin');
			$data=$query->row_array(); //to print 1 row
			return $data;
		}

		function updatePassword($data){
			$this->db->where("id", '1');
			$this->db->update('admin', $data);
		}
	}

 ?>