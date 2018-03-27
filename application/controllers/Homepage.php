<?php 
if(!defined('BASEPATH'))
	exit('No direct script access allowed');

class Homepage extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$data = array(
				'headTitle' => 'Garage HC Auto | Promoting Program',
		 );
		
		$this->load->view('templates/head', $data); 
		$this->load->view('templates/navbar');
		$this->load->view("home_view");
		$this->load->view('templates/footer');
	}

	public function newsa(){
		$this->load->view("news_a");
	}

	public function newsb(){
		$this->load->view("news_b");
	}

	public function newsc(){
		$this->load->view("news_c");
	}

	public function newsd(){
		$this->load->view("news_d");
	}

	public function newse(){
		$this->load->view("news_e");
	}

	public function newsf(){
		$this->load->view("news_f");
	}

	// public function servicea(){
	// 	$this->load->view("service_a");
	// }

	// public function serviceb(){
	// 	$this->load->view("service_b");
	// }

	// public function servicec(){
	// 	$this->load->view("service_c");
	// }

	// public function serviced(){
	// 	$this->load->view("service_d");
	// }

	// public function servicee(){
	// 	$this->load->view("service_e");
	// }
}
?>