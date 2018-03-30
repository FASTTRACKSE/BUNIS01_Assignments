<?php 

class Homepage_Model extends CI_Model
{
	public function getNews(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get("news", 6);
		$data = $query->result_array();

		return $data;
	}

	public function getImage(){
		$this->db->order_by("id");
		$query = $this->db->get("homeslider");
		$data = $query->result_array();

		return $data;
	}
}

?>