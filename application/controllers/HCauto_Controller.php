<?php 
class HCauto_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
	}

	public function test(){
		$this->load->view('services');
	}

	public function test1(){
		$this->load->view('bodyIndex');
	}

	public function view(){
		$data = array(
			'headtitle' => 'Services',
		);

		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('templates/body');
		$this->load->view('templates/footer');
	}

	public function showEngine(){
		$this->load->model("hcauto");
		$data["getData"] = $this->hcauto->get_Engine();
		$this->load->view("services",$data);
	}

	public function showElectrical(){
		$this->load->model("hcauto");
		$data["getData1"] = $this->hcauto->get_Electrical();
		$this->load->view("services",$data);
	}

	public function showBody(){
		$this->load->model("hcauto");
		$data["getData2"] = $this->hcauto->get_Body();
		$this->load->view("services",$data);
	}

	public function showCarRescue(){
		$this->load->model("hcauto");
		$data["getData3"] = $this->hcauto->get_CarRescue();
		$this->load->view("services",$data);
	}

	public function showD2D(){
		$this->load->model("hcauto");
		$data["getData4"] = $this->hcauto->get_D2D();
		$this->load->view("services",$data);
	}
}
?>