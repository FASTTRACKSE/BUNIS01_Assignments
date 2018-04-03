<?php 

class Product_Model extends CI_Model
{
	public function getProduct($perPage, $uri)
	{
		// $this->db->where("studentID",'BN001');
			if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('product')->limit($perPage, $uri*5-5);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
	}
	public function getProductDesc($id)
	{
		
		$this->db->where('insuranceID',$id);
		$query=$this->db->get("insurance");
		$data=$query->row_array();

		return $data;
	}

	public function getInsurance($perPage, $uri)
	{
		// $this->db->where("studentID",'BN001');
			if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('product')->where('ProductType', 'Insurance')->limit($perPage, $uri*5-5);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
	}


	public function getCarParts($perPage, $uri)
	{
		if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('product')->where('ProductType', 'CarParts')->limit($perPage, $uri*6-6);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
	}

		public function getCarPartsDesc($id)
	{
		
		$this->db->where('CarPartsID',$id);
		$query=$this->db->get("carparts");
		$data=$query->row_array();

		return $data;
	}


	public function getAcc($perPage, $uri)
	{
		// $this->db->where("studentID",'BN001');
	if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('product')->where('ProductType', 'Accessory')->limit($perPage, $uri*6-6);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
	}

		public function getAccDesc($id)
	{
		
		$this->db->where('AccessoryID',$id);
		$query=$this->db->get("accessory");
		$data=$query->row_array();

		return $data;
	}

	public function getOilandFluid($perPage, $uri)
	{
		if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('product')->where('ProductType', 'OilandFluid')->limit($perPage, $uri*6-6);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
	}

		public function getOilandFluidDesc($id)
	{
		
		$this->db->where('OilandFluidID',$id);
		$query=$this->db->get("oilandfluid");
		$data=$query->row_array();

		return $data;
	}
		public function getUsedCars($perPage, $uri)
	{
	if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('product')->where('ProductType', 'UsedCars')->limit($perPage, $uri*6-6);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
	}

		public function getUsedCarsDesc($id)
	{
		
		$this->db->where('UsedCarsID',$id);
		$query=$this->db->get("usedcars");
		$data=$query->row_array();

		return $data;
	}

	

		public function getalldata($id)
	{
		
		$this->db->where('ProductID',$id);
		$query=$this->db->get("product");
		$data=$query->row_array();

		return $data;
	}

		public function getalladmindata($perPage, $uri)
	{
		
			if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('product')->limit($perPage, $uri*5-5);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
	}

		function insert_product($data){
			$this->db->insert('product', $data);
		}

	
		function do_update_product($id, $data){
			$this->db->where("ProductID", $id);
			$this->db->update('product', $data);
		}
		function delete_product($id){
			$this->db->where("ProductID", $id);
			$query=$this->db->get('product');
			$data=$query->row_array(); //to print 1 row
			return $data;

		}

		function do_delete_product($id){
			$this->db->where("ProductID", $id);
			$this->db->delete('product');
		}




}