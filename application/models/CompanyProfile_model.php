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

	
	public function getVision()
	{
		$this->db->from("datas");
		$this->db->where("id=1");
		$query = $this->db->get();

		return $query->result_array();
	}
	public function getMission()
	{
		$this->db->from("datas");
		$this->db->where("id=2");
		$query = $this->db->get();

		return $query->result_array();
	}
	public function getCustomerCare()
	{
		$this->db->from("datas");
		$this->db->where("id=3");
		$query = $this->db->get();

		return $query->result_array();
	}
	public function getTechnicalSupport()
	{
		$this->db->from("datas");
		$this->db->where("id=4");
		$query = $this->db->get();

		return $query->result_array();
	}

}
