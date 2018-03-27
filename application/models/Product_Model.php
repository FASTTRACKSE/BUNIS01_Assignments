<?php 

class Product_Model extends CI_Model
{
	public function getProduct()
	{
		// $this->db->where("studentID",'BN001');

		$query=$this->db->get("insurance");
		$data=$query->result_array();

		return $data;
	}
	public function getProductDesc($id)
	{
		
		$this->db->where('insuranceID',$id);
		$query=$this->db->get("insurance");
		$data=$query->row_array();

		return $data;
	}
	public function getCarParts()
	{
		// $this->db->where("studentID",'BN001');

		$query=$this->db->get("carparts");
		$data=$query->result_array();

		return $data;
	}

		public function getCarPartsDesc($id)
	{
		
		$this->db->where('CarPartsID',$id);
		$query=$this->db->get("carparts");
		$data=$query->row_array();

		return $data;
	}


	public function getAcc()
	{
		// $this->db->where("studentID",'BN001');

		$query=$this->db->get("accessory");
		$data=$query->result_array();

		return $data;
	}

		public function getAccDesc($id)
	{
		
		$this->db->where('AccessoryID',$id);
		$query=$this->db->get("accessory");
		$data=$query->row_array();

		return $data;
	}

	public function getOilandFluid()
	{
		// $this->db->where("studentID",'BN001');

		$query=$this->db->get("oilandfluid");
		$data=$query->result_array();

		return $data;
	}

		public function getOilandFluidDesc($id)
	{
		
		$this->db->where('OilandFluidID',$id);
		$query=$this->db->get("oilandfluid");
		$data=$query->row_array();

		return $data;
	}
		public function getUsedCars()
	{
		// $this->db->where("studentID",'BN001');

		$query=$this->db->get("usedcars");
		$data=$query->result_array();

		return $data;
	}

		public function getUsedCarsDesc($id)
	{
		
		$this->db->where('UsedCarsID',$id);
		$query=$this->db->get("usedcars");
		$data=$query->row_array();

		return $data;
	}

	public function update($id)
	{
		$result= $this->db->update("project",$data);
		return $result;
	}
}