<?php 

	class NewsController extends CI_Controller{


		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('pagination');
			$this->load->model('newsModel');
		}

		public function viewPromoProg(){
			$config['base_url'] = 'http://localhost/hcauto/index.php/NewsController/viewPromoProg';
			$config['total_rows'] = $this->db->get_where('news', array('type' => 'promoprog'))->num_rows();
			$config['per_page'] = 6;
			$config['num_links'] = 5;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			$data = array(
				'headTitle' => 'Garage HC Auto | Promoting Program',
				'total_rows' => $config['total_rows'],
				'headerTitle' => 'Promoting Program',
			);

			$dataPage['newsList'] = $this->newsModel->getListPromoProg($config['per_page'], $this->uri->segment(3));

			$this->load->view('templates/head', $data);
			$this->load->view('templates/navbar');
			$this->load->view('pages/promotingprogram', $dataPage, $data);
			$this->load->view('templates/footer');
		}

		public function viewTechCons(){
			$config['base_url'] = 'http://localhost/hcauto/index.php/NewsController/viewPromoProg';
			$config['total_rows'] = $this->db->get_where('news', array('type' => 'techcons'))->num_rows();
			$config['per_page'] = 6;
			$config['num_links'] = 5;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			$data = array(
				'headTitle' => 'Garage HC Auto | Technical Consulting',
				'total_rows' => $config['total_rows'],
				'headerTitle' => 'Technical Consulting',
			);

			$dataPage['newsList'] = $this->newsModel->getListTechCons($config['per_page'], $this->uri->segment(3));

			$this->load->view('templates/head', $data);
			$this->load->view('templates/navbar');
			$this->load->view('pages/promotingprogram', $dataPage, $data);
			$this->load->view('templates/footer');
		}

		public function viewAutoNews(){
			$config['base_url'] = 'http://localhost/hcauto/index.php/NewsController/viewPromoProg';
			$config['total_rows'] = $this->db->get_where('news', array('type' => 'autonews'))->num_rows();
			$config['per_page'] = 6;
			$config['num_links'] = 5;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			$data = array(
				'headTitle' => 'Garage HC Auto | Automotive News',
				'total_rows' => $config['total_rows'],
				'headerTitle' => 'Automotive News',
			);

			$dataPage['newsList'] = $this->newsModel->getListAutoNews($config['per_page'], $this->uri->segment(3));

			$this->load->view('templates/head', $data);
			$this->load->view('templates/navbar');
			$this->load->view('pages/promotingprogram', $dataPage, $data);
			$this->load->view('templates/footer');
		}

		public function viewNewsDetail($id){
			$dataPage['news'] = $this->newsModel->getNewsById($id);


			$data = array(
				'headTitle' => 'Garage HC Auto | Automotive News',
				'total_rows' => $config['total_rows'],
				'headerTitle' => 'Automotive News',
			);
		}
	}


?>