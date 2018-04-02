<?php 

class Homepage_Model extends CI_Model
{
	public function getNews(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get("news", 6);
		$data = $query->result_array();

		return $data;
	}
	public function getCountRowSlider(){
		$this->db->order_by("id");
		$data = $this->db->count_all_results("homeslider");
		

		return $data;
	}
	public function getImage(){
		$this->db->order_by("id");
		$query = $this->db->get("homeslider");
		$data = $query->result_array();

		return $data;
	}

	public function getSpecificImage($id)
	{
		
		$this->db->where('id',$id);
		$query=$this->db->get("homeslider");
		$data=$query->row_array();

		return $data;
	}

	public function insertImage($data){
		$result = $this->db->insert("homeslider",$data);
		return $result;
	}

	public function deleteImage($id)
	{
		$this->db->where("id",$id);
		$result=$this->db->delete("homeslider");
		
		return $result;
	}

	public function getPartners(){
		$query = $this->db->get("partners");
		$data = $query->result_array();

		return $data;
	}
}

?>