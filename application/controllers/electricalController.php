<?php

class electricalController extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('electricalModel');
	}

	public function showElectrical(){
		$data["getData"] = $this->electricalModel->get_Electrical();
		$this->load->view("electricalIndex",$data);
	}

	public function showBodyDetail($bodyID){
		$data["getDataByID"] = $this->electricalModel->get_Data_by_ID($bodyID);
		$this->load->view("detailIndex",$data);
	}

	public function insert(){
		$data = array(
			"name" =>$this->input->post("fName"),
			"fullName" =>$this->input->post("fFullName"),
			"email" =>$this->input->post("fEmail"),
			"password"=>$this->input->post("fPass")
		);
		$this->studentsModel->insert_data($data);
		redirect("students_controller/pagination");
	}

	public function delete($deleteID){;
		$this->studentsModel->delete_Data_by_ID($deleteID);
		redirect("students_controller/pagination");
	}

	public function update($updateID){
		$data["getUpdateData"] = $this->studentsModel->get_Data($studentID);
		$data = array(
			"name" =>$this->input->post("fName"),
			"fullName" =>$this->input->post("fFullName"),
			"email" =>$this->input->post("fEmail"),
			"password"=>$this->input->post("fPass")
		);
		$this->studentsModel->update_Data_by_ID($updateID,$data);
		redirect("students_controller/pagination");
	}

	public function getPics(){
		$this->load->library('form_validation');
		
			$upload_data=$this->upload->data();

			$config['upload_path']          = base_url(). 'uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = '2048000';

			$this->load->library('upload',$config);
			$this->upload->initialize($config);


			$data = array(
				"name" =>$this->input->post("fName"),
				"fullName" =>$this->input->post("fFullName"),
				"email" =>$this->input->post("fEmail"),
				"password"=>$this->input->post("fPass"),
				"pictures"=> $upload_data['file_name']
			);

			$this->studentsModel->save_pic($data);
			redirect("students_controller/pagination");
	}

}

?>