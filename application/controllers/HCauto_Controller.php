<?php 
class HCauto_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('servicesModel');
	}

//global
	public function insert(){
		$data = array(
			"name" =>$this->input->post("fName"),
			"description" =>$this->input->post("fDesc"),
			"tag" =>$this->input->post("fTag")
		);
		$this->servicesModel->insert_data($data);
		redirect("#");
	}

	public function delete($deleteID){;
		$this->servicesModel->delete_Data_by_ID($deleteID);
		redirect("#");
	}

	public function update($updateID){
		$data["getUpdateData"] = $this->servicesModel->get_Data($studentID);
		$data = array(
			"name" =>$this->input->post("fName"),
			"description" =>$this->input->post("fDesc"),
			"tag" =>$this->input->post("fTag")
		);
		$this->servicesModel->update_Data_by_ID($updateID,$data);
		redirect("#");
	}

// view index
	public function view(){
		$data = array(
			'headtitle' => 'Services',
		);
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('services/services');
		$this->load->view('templates/footer');
	}

// body index
	public function showBody(){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->servicesModel->get_Body();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('services/bodyIndex',$data);
		$this->load->view('templates/footer');
	}

	public function showBodyDetail($bodyID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($bodyID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("services/detailIndex",$data);
		// $this->load->view('templates/footer');
	}

//car rescue index
	public function showCarRescue(){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->servicesModel->get_CarRescue();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view("services/carRescueIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showCarRescueDetail($rescueID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($rescueID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("services/detailIndex",$data);
		// $this->load->view('templates/footer');
	}

//d2d index
	public function showD2D(){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->servicesModel->get_D2D();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view("services/d2dIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showD2DDetail($d2dID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($d2dID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("services/detailIndex",$data);
		// $this->load->view('templates/footer');
	}

//electrical index
	public function showElectrical(){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->servicesModel->get_Electrical();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view("services/electricalIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showElectricalDetail($electricalID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->servicesModelce->get_Data_by_ID($electricalID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("services/detailIndex",$data);
		// $this->load->view('templates/footer');
	}

//engine index
	public function showEngine(){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->servicesModel->get_Engine();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view("services/engineIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showEngineDetail($engineID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($engineID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("services/detailIndex",$data);
		// $this->load->view('templates/footer');
	}
}
?>