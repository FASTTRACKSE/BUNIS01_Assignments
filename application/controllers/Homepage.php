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

		$load_image = $this->Homepage_Model->getImage();
		$dataImage['image'] = $load_image;

		$load_news = $this->Homepage_Model->getNews();
		$dataNews['id'] = $load_news;

		$data = array_merge($dataHead, $dataNews, $dataImage);
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view("home_view",$data);
		$this->load->view('templates/footer');
	}
}
?>