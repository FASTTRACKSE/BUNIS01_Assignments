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
<<<<<<< HEAD
		$this->load->view('Services/services');
=======
		$this->load->view('services/services');
>>>>>>> f455e31ff5c588fb3c1af813a98fe8cf573447b6
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

	public function showDetail($bodyID){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->servicesModel->get_Body();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
<<<<<<< HEAD
		$this->load->view('Services/bodyIndex');
=======

		$this->load->view("services/detailIndex",$data);

		$this->load->view('bodyIndex');
>>>>>>> f455e31ff5c588fb3c1af813a98fe8cf573447b6
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
<<<<<<< HEAD
		$this->load->view("Services/carRescueIndex");
=======

		$this->load->view("services/carRescueIndex",$data);
>>>>>>> f455e31ff5c588fb3c1af813a98fe8cf573447b6
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
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->servicesModel->get_D2D();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
<<<<<<< HEAD
		$this->load->view("Services/d2dIndex");
=======

		$this->load->view("services/d2dIndex",$data);
>>>>>>> f455e31ff5c588fb3c1af813a98fe8cf573447b6
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
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->servicesModel->get_Electrical();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
<<<<<<< HEAD
		$this->load->view("Services/electricalIndex");
=======

		$this->load->view("services/electricalIndex",$data);
>>>>>>> f455e31ff5c588fb3c1af813a98fe8cf573447b6
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
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->servicesModel->get_Engine();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
<<<<<<< HEAD
		$this->load->view("Services/engineIndex");
=======

		$this->load->view("services/engineIndex",$data);
>>>>>>> f455e31ff5c588fb3c1af813a98fe8cf573447b6
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