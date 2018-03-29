<?php 

	class AdminController extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('newsModel');
			$this->load->library('pagination');
		}

		public function news(){
			$config['base_url'] = 'http://localhost/hcautoproject/index.php/AdminController/news/';
			$config['total_rows'] = $this->db->get('news')->num_rows();
			$config['per_page'] = 5;
			$config['num_links'] = 3;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			$data = array(
				'headerTitle' => 'News',
			);

			$dataPage['news_list'] = $this->newsModel->getList($config['per_page'], $this->uri->segment(3));

			

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/body', $dataPage);
			$this->load->view('admintemplates/footer');
		}		

	}


?>