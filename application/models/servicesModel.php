<?php
class servicesModel extends CI_Model{
	public function get_Engine(){
		$query = $this->db->get('engine');
		$data = $query->result_array();
		return $data;
	}

	public function get_Electrical(){
		$query = $this->db->get('electrical');
		$data = $query->result_array();
		return $data;
	}

	public function get_Body(){
		$query = $this->db->get('body');
		$data = $query->result_array();
		return $data;
	}
	
	public function get_CarRescue(){
		$query = $this->db->get('carrescue');
		$data = $query->result_array();
		return $data;
	}	

	public function get_D2D(){
		$query = $this->db->get('d2ddelivery');
		$data = $query->result_array();
		return $data;
	}

}
?>