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
			'headTitle' => 'Garage HC Auto | Services',
		);

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

		$dataModel["getData"] = $this->servicesModel->get_Body();

		$data = array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('services/bodyIndex');
		$this->load->view('templates/footer');
	}

	public function showDetail($bodyID){
		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Body Service',
		);

		$dataModel["getData"] = $this->servicesModel->get_Body();
		$data=array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/detailIndex");
		$this->load->view('bodyIndex');
		$this->load->view('templates/footer');
	}

//car rescue index
	public function showCarRescue(){
		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Car Rescue Service',
		);

		$dataModel["getData"] = $this->servicesModel->get_CarRescue();
		$data=array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/carRescueIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showCarRescueDetail($rescueID){
		$data = array(
			'headTitle' => 'Garage HC Auto | Car Rescue Service',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($rescueID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("services/detailIndex",$data);
		// $this->load->view('templates/footer');
	}


//d2d index
	public function showD2D(){
		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Door to Door Service',
		);

		$dataModel["getData"] = $this->servicesModel->get_D2D();
		$data=array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/d2dIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showD2DDetail($d2dID){
		$data = array(
			'headTitle' => 'Garage HC Auto | Door to Door Service',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($d2dID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("services/detailIndex",$data);
		// $this->load->view('templates/footer');
	}



//electrical index
	public function showElectrical(){
		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Door to Door Service',
		);
		$dataModel["getData"] = $this->servicesModel->get_Electrical();
		$data=array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/electricalIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showElectricalDetail($electricalID){
		$data = array(
			'headTitle' => 'Garage HC Auto | Electrical Service',
		);
		$data["getDataByID"] = $this->servicesModelce->get_Data_by_ID($electricalID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("services/detailIndex",$data);
		// $this->load->view('templates/footer');
	}


//engine index
	public function showEngine(){
		$dataHeader = array(
			'headTitle' => 'Garage HC Auto | Engine Service',
		);

		$dataModel["getData"] = $this->servicesModel->get_Engine();
		$data=array_merge($dataHeader, $dataModel);

		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/engineIndex");
		$this->load->view('templates/footer');
	}

	public function showEngineDetail($engineID){
		$data = array(
			'headTitle' => 'Garage HC Auto | Engine Service',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($engineID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("services/detailIndex",$data);
		// $this->load->view('templates/footer');
	}

}
?>