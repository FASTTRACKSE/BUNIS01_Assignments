<?php
class ServicesModel extends CI_Model{

//view services
	function get_Services(){
		$this->db->select('*');
		$this->db->where('tag');
		$query = $this->db->get("service");
		$data = $query->row_array();
		return $data;
	}

//body
	function get_Body(){
		// $this->db->where_in("SELECT * FROM service WHERE tag = 'Body'");
		$this->db->where('tag =','Body'); 
		$query = $this->db->get("service");
		$data = $query->row_array();
		return $data;
	}

//cr
	function get_CarRescue(){
		//$this->db->select('*');
		//$this->db->where_in("SELECT * FROM service WHERE tag = 'Car Rescue'");
        $this->db->where('tag =','Car Rescue'); 
		$query = $this->db->get("service");
		$data = $query->row_array();
		return $data;
	}

//electrical
	function get_Electrical(){
		//$this->db->select('*');
		//$this->db->where_in("SELECT * FROM service WHERE tag = 'Electrical'");
        $this->db->where('tag =','Electrical'); 
		$query = $this->db->get("service");
		$data = $query->row_array();
		return $data;
	}

//engine
	function get_Engine(){
		//$this->db->select('*');
		//$this->db->where_in("SELECT * FROM service WHERE tag = 'Engine'");
        $this->db->where('tag =','Engine'); 
		$query = $this->db->get("service");
		$data = $query->row_array();
		return $data;
	}

//d2d
	function get_D2D(){
		//$this->db->select('*');
		//$this->db->where_in("SELECT * FROM service WHERE tag = 'Door-to-Door'");
        $this->db->where('tag =','Door-to-Door'); 
		$query = $this->db->get("service");
		$data = $query->row_array();
		return $data;
	}
}

?>