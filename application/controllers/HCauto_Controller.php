<?php 
class HCauto_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('servicesModel');
	}

	public function view(){
		$data = array(
			'headtitle' => 'Services',
		);

		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('services');
		$this->load->view('templates/footer');
	}
}
?>