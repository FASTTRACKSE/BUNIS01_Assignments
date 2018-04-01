<?php 
class HCauto_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('servicesModel');
	}

// view index
	public function view(){
		$data = array(
			'headtitle' => 'Services',
		);
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('services');
		$this->load->view('templates/footer');
	}

// body index
	public function showBody(){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->servicesModel->get_Body();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view('bodyIndex');
		$this->load->view('templates/footer');
	}

//car rescue index
	public function showCarRescue(){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->servicesModel->get_CarRescue();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("carRescueIndex");
		$this->load->view('templates/footer');
	}

//d2d index
	public function showD2D(){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->servicesModel->get_D2D();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("d2dIndex");
		$this->load->view('templates/footer');
	}

//electrical index
	public function showElectrical(){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->servicesModel->get_Electrical();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("electricalIndex");
		$this->load->view('templates/footer');
	}

//engine index
	public function showEngine(){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->servicesModel->get_Engine();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("engineIndex");
		$this->load->view('templates/footer');
	}
}
?>