<?php

class bodyModel extends CI_Model{

	function get_Body(){
		$query = $this->db->get("body");
		$data = $query->result_array();
		return $data;
	}

	function get_Data_by_ID($bodyID){
        $this->db->select('*');
        $this->db->where('ID',$bodyID);
        $query = $this->db->get("body");
        $data = $query->result_array();
        return $data;
    }

	function delete_Data_by_ID($deleteID){
    	$this->db->where("ID",$deleteID);
    	$this->db->delete("body");
    }

    function insert_Data($data){
    	$this->db->insert("body",$data);
    }

    function update_Data_by_ID($updateID,$data){
    	$this->db->where('ID',$updateID);
    	$this->db->update("body",$data);
    }

    function get_all_pics(){
		$getPics = $this->db->get('body');
		return $getPics->result();
	}

	// function save_pic($data){
	// 	$savePic['ID']=$data['ID'];
	// 	$savePic['name']=$data['name'];
	// 	$savePic['fullName']=$data['fullName'];
	// 	$savePic['email']=$data['email'];
	// 	$savePic['password']=$data['password'];
	// 	$savePic['pictures']=$data['pictures'];
	// 	$query=$this->db->insert('users',$savePic);
	// }
}

?>