<?php 

	class NewsControllerAdmin extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
		}

		public function viewAdminPage(){
			$this->load->view('admintemplates/head');
			$this->load->view('admintemplates/navbar');

			$this->load->view('admintemplates/body');
			$this->load->view('admintemplates/footer');
		}		

	}


?>