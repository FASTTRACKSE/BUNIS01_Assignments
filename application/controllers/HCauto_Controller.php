<?php 
class HCauto_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ServicesModel');
	}

// view index
	public function view(){
		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Services',
		);
		$dataModel["getData"] = $this->ServicesModel->get_Services();

		$data = array_merge($dataHeader, $dataModel);
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('services/services');
		$this->load->view('templates/footer');
	}

// body index
	public function showBody(){

		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Body Service',
		);

		$dataModel["getData"] = $this->ServicesModel->get_Body();

		$data = array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('services/bodyIndex');
		$this->load->view('templates/footer');
	}


//car rescue index
	public function showCarRescue(){
		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Car Rescue Service',
		);

		$dataModel["getData"] = $this->ServicesModel->get_CarRescue();
		$data=array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/carRescueIndex",$data);
		$this->load->view('templates/footer');
	}



//d2d index
	public function showD2D(){
		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Door to Door Service',
		);

		$dataModel["getData"] = $this->ServicesModel->get_D2D();
		$data=array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/d2dIndex",$data);
		$this->load->view('templates/footer');
	}

//electrical index
	public function showElectrical(){
		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Door to Door Service',
		);
		$dataModel["getData"] = $this->ServicesModel->get_Electrical();
		$data=array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/electricalIndex",$data);
		$this->load->view('templates/footer');
	}

//engine index
	public function showEngine(){
		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Engine Service',
		);

		$dataModel["getData"] = $this->ServicesModel->get_Engine();
		$data=array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/engineIndex",$data);
		$this->load->view('templates/footer');
	}
}
?>