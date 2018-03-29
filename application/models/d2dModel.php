<?php

class d2dModel extends CI_Model{
	function get_D2D(){
		$query = $this->db->get('d2ddelivery');
		$data = $query->result_array();
		return $data;
	}
	function delete_Data_by_ID($deleteID){
    	$this->db->where("ID",$deleteID);
    	$this->db->delete("users");
    }

    function insert_Data($data){
    	$this->db->insert("users",$data);
    }

    function update_Data_by_ID($updateID,$data){
    	$this->db->where('ID',$updateID);
    	$this->db->update("users",$data);
    }

    function get_all_pics(){
		$getPics = $this->db->get('users');
		return $getPics->result();
	}

	function save_pic($data){
		$savePic['ID']=$data['ID'];
		$savePic['name']=$data['name'];
		$savePic['fullName']=$data['fullName'];
		$savePic['email']=$data['email'];
		$savePic['password']=$data['password'];
		$savePic['pictures']=$data['pictures'];
		$query=$this->db->insert('users',$savePic);
	}
}


?>