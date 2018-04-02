<?php 

	class NewsController extends CI_Controller{


		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('pagination');
			$this->load->model('NewsModel');
		}

		public function viewNews(){
			$config['total_rows'] = $this->db->get('news')->num_rows();
			$config['per_page'] = 6;
			$config['num_links'] = 5;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			$data = array(
				'headTitle' => 'Garage HC Auto | News',
				'total_rows' => $config['total_rows'],
				'headerTitle' => '',
				'type' => 'viewNews',
			);

			$dataPage['newsList'] = $this->NewsModel->getList($config['per_page'], $this->uri->segment(3));

			$this->load->view('templates/head', $data);
			$this->load->view('templates/navbar');
			$this->load->view('pages/news', $dataPage, $data);
			$this->load->view('templates/footer');
		}

		public function viewPromoProg(){
			$config['total_rows'] = $this->db->get_where('news', array('type' => 'promoprog'))->num_rows();
			$config['per_page'] = 6;
			$config['num_links'] = 5;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			$data = array(
				'headTitle' => 'Garage HC Auto | Promotion Program',
				'total_rows' => $config['total_rows'],
				'headerTitle' => '| Promotion Program',
				'type' => 'viewPromoProg',
			);

			$dataPage['newsList'] = $this->NewsModel->getListPromoProg($config['per_page'], $this->uri->segment(3));

			$this->load->view('templates/head', $data);
			$this->load->view('templates/navbar');
			$this->load->view('pages/news', $dataPage, $data);
			$this->load->view('templates/footer');
		}

		public function viewTechCons(){
			$config['total_rows'] = $this->db->get_where('news', array('type' => 'techcons'))->num_rows();
			$config['per_page'] = 6;
			$config['num_links'] = 5;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			$data = array(
				'headTitle' => 'Garage HC Auto | Technical Consulting',
				'total_rows' => $config['total_rows'],
				'headerTitle' => '| Technical Consulting',
				'type' => 'viewTechCons',
			);

			$dataPage['newsList'] = $this->NewsModel->getListTechCons($config['per_page'], $this->uri->segment(3));

			$this->load->view('templates/head', $data);
			$this->load->view('templates/navbar');
			$this->load->view('pages/news', $dataPage, $data);
			$this->load->view('templates/footer');
		}

		public function viewAutoNews(){
			$config['total_rows'] = $this->db->get_where('news', array('type' => 'autonews'))->num_rows();
			$config['per_page'] = 6;
			$config['num_links'] = 5;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			$data = array(
				'headTitle' => 'Garage HC Auto | Automotive News',
				'total_rows' => $config['total_rows'],
				'headerTitle' => '| Automotive News',
				'type' => 'viewAutoNews'
			);

			$dataPage['newsList'] = $this->NewsModel->getListAutoNews($config['per_page'], $this->uri->segment(3));

			$this->load->view('templates/head', $data);
			$this->load->view('templates/navbar');
			$this->load->view('pages/news', $dataPage, $data);
			$this->load->view('templates/footer');
		}

		public function viewNewsDetail($id){

			$dataPage['news'] = $this->NewsModel->getNewsById($id);

			$dataHead = array(
				'headTitle' => 'Garage HC Auto',
				'type' => 'viewAutoNews'
			);

			$data = array_merge($dataPage, $dataHead);

			$this->load->view('templates/head', $data);
			$this->load->view('templates/navbar');
			$this->load->view('pages/newsdetail');
			$this->load->view('templates/footer');
		}
	}


?>