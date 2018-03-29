<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyProfile extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('CompanyProfile_model');
		}

	public function index()
	{
		$data = array(
				'headTitle' => 'Garage HC Auto | Company Profile'
		 );

		$data['partners'] = $this->CompanyProfile_model->getPartners();
		$data['staffs'] = $this->CompanyProfile_model->getStaffs();
		$data['datas'] = $this->CompanyProfile_model->getDatas();
		$data['about'] = $this->CompanyProfile_model->getAbout();

		$this->load->view('templates/head', $data); 
		$this->load->view('templates/navbar');

		$this->load->view('company_profile', $data);	
	}
}
