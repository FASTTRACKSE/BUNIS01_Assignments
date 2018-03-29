<?php 

	class AdminController extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('CompanyProfile_model');
			$this->load->model('newsModel');
			$this->load->library('pagination');
		}

		public function companyProfile()
		{
			$data = array(
				'headerTitle' => 'Company Profile'
		 	);

			$data['partners'] = $this->CompanyProfile_model->getPartners();
			$data['staffs'] = $this->CompanyProfile_model->getStaffs();
			$data['datas'] = $this->CompanyProfile_model->getDatas();
			$data['about'] = $this->CompanyProfile_model->getAbout();

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/companyProfile');
			$this->load->view('admintemplates/footer');
		}

		public function news(){
			$config['base_url'] = 'http://localhost/hcautoproject/index.php/AdminController/news/';
			$config['total_rows'] = $this->db->get('news')->num_rows();
			$config['per_page'] = 5;
			$config['num_links'] = 3;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			$dataView = array(
				'headerTitle' => 'News',
			);

			$dataPage['news_list'] = $this->newsModel->getList($config['per_page'], $this->uri->segment(3));

			$data = array_merge($dataView, $dataPage);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/news');
			$this->load->view('admintemplates/footer');
		}		


		

	}


?>