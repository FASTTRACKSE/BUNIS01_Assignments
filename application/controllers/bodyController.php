<?php 

class bodyController extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('bodyModel');
	}

	public function showBody(){
			$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->bodyModel->get_Body();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('bodyIndex',$data);
		$this->load->view('templates/footer');
	}

	public function showBodyDetail($bodyID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->bodyModel->get_Data_by_ID($bodyID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("detailIndex",$data);
		// $this->load->view('templates/footer');
	}

	public function insert(){
		$data = array(
			"bodyName" =>$this->input->post("fName"),
			"bodyDesc" =>$this->input->post("fDesc")
		);
		$this->bodyModel->insert_data($data);
		redirect("#");
	}

	public function delete($deleteID){;
		$this->bodyModel->delete_Data_by_ID($deleteID);
		redirect("#");
	}

	public function update($updateID){
		$data["getUpdateData"] = $this->bodyModel->get_Data($studentID);
		$data = array(
			"bodyName" =>$this->input->post("fName"),
			"bodyDesc" =>$this->input->post("fDesc"),
		);
		$this->bodyModel->update_Data_by_ID($updateID,$data);
		redirect("#");
	}

	// public function getPics(){
	// 	$this->load->library('form_validation');
		
	// 		$upload_data=$this->upload->data();

	// 		$config['upload_path']          = base_url(). 'uploads/';
	// 		$config['allowed_types']        = 'gif|jpg|png';
	// 		$config['max_size']             = '2048000';

	// 		$this->load->library('upload',$config);
	// 		$this->upload->initialize($config);


	// 		$data = array(
	// 			"name" =>$this->input->post("fName"),
	// 			"fullName" =>$this->input->post("fFullName"),
	// 			"email" =>$this->input->post("fEmail"),
	// 			"password"=>$this->input->post("fPass"),
	// 			"pictures"=> $upload_data['file_name']
	// 		);

	// 		$this->studentsModel->save_pic($data);
	// 		redirect("students_controller/pagination");
	// }
}

?>