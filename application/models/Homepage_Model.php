<?php 

class Homepage_Model extends CI_Model
{
	public function getNews(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get("news", 6);
		$data = $query->result_array();

		return $data;
	}

	// public function getNews(){
	// 	$query = $this->db->get("news");
	// 	$result=$query->result();
	// 	$data=array_slice($result,-3,3,true);
	// 	return $data;
	// }
}

?>