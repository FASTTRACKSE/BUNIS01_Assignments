<?php 
if(!defined('BASEPATH'))
	exit('No direct script access allowed');

class Homepage extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Homepage_Model');
		$this->load->helper("url");
	}

	public function index(){

		$dataHead = array(
				'headTitle' => 'Garage HC Auto | Promoting Program',
		 );

		$load_news = $this->Homepage_Model->getNews();
		$dataPage['id'] = $load_news;

		$data = array_merge($dataHead, $dataPage);
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view("home_view");
		$this->load->view('templates/footer');
	}
}
?>