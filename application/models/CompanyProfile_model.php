<?php

class CompanyProfile_model extends CI_Model {

	public function getDatas()
	{
		$this->db->from("datas");
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDataById($id)
	{
		$this->db->from("datas");
		$this->db->where("id" , $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getAbout()
	{
		$this->db->from("datas_about");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getAboutById($id)
	{
		$this->db->from("datas_about");
		$this->db->where("id" , $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getStaffs()
	{
		$this->db->order_by("id");
		$query = $this->db->get("staffs");

		return $query->result_array();
	}
	public function getStaffById($id)
	{
		$this->db->from("staffs");
		$this->db->where("id" , $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getPartners()
	{
		$this->db->order_by("id");
		$query = $this->db->get("partners");

		return $query->result_array();
	}

	public function getPartnerById($id)
	{
		$this->db->from("partners");
		$this->db->where("id" , $id);
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

	public function addPartner($data)
	{
		$this->db->insert("partners", $data);	
	}


// update---------------------------------------------------------------------------------------
	public function updateData($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('datas', $data);
	}

	public function updateAbout($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('datas_about', $data);
	}

	public function updateStaff($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('staffs', $data);
	}

	public function updatePartner($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('partners', $data);
	}







}
