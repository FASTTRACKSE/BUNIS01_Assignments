<?php
class servicesModel extends CI_Model{

//global
	function get_Data_by_ID($getID){
        $this->db->select('*');
        $this->db->where('ID',$getID);
        $query = $this->db->get("service");
        $data = $query->result_array();
        return $data;
    }

	function delete_Data_by_ID($deleteID){
    	$this->db->where("ID",$deleteID);
    	$this->db->delete("service");
    }

    function insert_Data($data){
    	$this->db->insert("service",$data);
    }

    function update_Data_by_ID($updateID,$data){
    	$this->db->where('ID',$updateID);
    	$this->db->update("service",$data);
    }


//body
	function get_Body(){
		$this->db->select('*');
		$this->db->where_in("SELECT * FROM service WHERE tag = 'Body'");
        $this->db->where('tag =','Body'); 
		$query = $this->db->get("service");
		$data = $query->result_array();
		return $data;
	}

//cr
	function get_CarRescue(){
		$this->db->select('*');
		$this->db->where_in("SELECT * FROM service WHERE tag = 'Car Rescue'");
        $this->db->where('tag =','Car Rescue'); 
		$query = $this->db->get("service");
		$data = $query->result_array();
		return $data;
	}

//electrical
	function get_Electrical(){
		$this->db->select('*');
		$this->db->where_in("SELECT * FROM service WHERE tag = 'Electrical'");
        $this->db->where('tag =','Electrical'); 
		$query = $this->db->get("service");
		$data = $query->result_array();
		return $data;
	}

//engine
	function get_Engine(){
		$this->db->select('*');
		$this->db->where_in("SELECT * FROM service WHERE tag = 'Engine'");
        $this->db->where('tag =','Engine'); 
		$query = $this->db->get("service");
		$data = $query->result_array();
		return $data;
	}

//d2d
	function get_D2D(){
		$this->db->select('*');
		$this->db->where_in("SELECT * FROM service WHERE tag = 'Door-to-Door'");
        $this->db->where('tag =','Door-to-Door'); 
		$query = $this->db->get("service");
		$data = $query->result_array();
		return $data;
	}
}

?>