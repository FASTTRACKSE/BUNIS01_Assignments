<?php

class CompanyProfile_model extends CI_Model {

	public function getPartners()
	{
		$this->db->order_by("id");
		$query = $this->db->get("partners");

		return $query->result_array();
	}

	public function getStaffs()
	{
		$this->db->order_by("id");
		$query = $this->db->get("staffs");

		return $query->result_array();
	}

	public function getDatas()
	{
		$this->db->from("datas");
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getAbout()
	{
		$this->db->from("datas_about");
		$query = $this->db->get();
		return $query->result_array();
	}

// add------------------------------------------------------------------------------------------

	public function addAbout($data)
	{
		$this->db->insert("datas_about", $data);	
	}

	public function addStaff($data)
	{
		$this->db->insert("staffs", $data);	
	}


// update---------------------------------------------------------------------------------------
	public function updateVision()
	{

	}

	public function updateMission()
	{
		
	}


	public function updateCustomerCare()
	{
		
	}

	public function updateTechnicalSupport()
	{
		
	}







}
