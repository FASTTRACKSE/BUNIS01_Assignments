<?php 

	class AdminController extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('pagination');
			$this->load->model('Homepage_Model');
			$this->load->model('CompanyProfile_model');
			$this->load->model('newsModel');
			$this->load->model('Product_Model');

			if (!$this->session->userdata('username')) {
		        redirect('LoginController/login');
		    }
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url().'index.php/LoginController/login');
		}
		
		public function loginValidation(){

		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		if($this->studentmodel->checkLogin($username, $password)){

			$session_data = array(
				'username' => $username
			);
			$this->session->set_userdata($session_data);
			redirect(base_url().'index.php/StudentController/index');
		}
		else{
			$this->session->set_flashdata('error', 'Invalid Username and Password');  
            
		}
	}

	//HOMEPAGE--------------------------------------------------------------------------------------
		public function homepage()
		{
			$dataView = array(
				'headerTitle' => 'Homepage'
		 	);

			$load_product=$this->Homepage_Model->getImage();
			$dataPage['id'] = $load_product;

			$data = array_merge($dataView, $dataPage);
			$data['row_count']= $this->Homepage_Model->getCountRowSlider();

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/editSlider');
			$this->load->view('admintemplates/footer');
		}

		public function insert_imageslider()
		{
			
			
			$dataView = array(
				'headerTitle' => 'Homepage',
			);

			$data = $dataView;

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/insertSlider');
			$this->load->view('admintemplates/footer');
		}

		public function create_imageslider()
		{

			$picture = $this->input->post('name');

			$config['upload_path']          = './assets/image/homepage/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $picture;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{

				$upload_data = $this->upload->data();
			

				$data = array(
					'image' => $upload_data['file_name'],
				);
				
				$this->Homepage_Model->insertImage($data);

				redirect('AdminController/homepage');

				}
		}

		public function delete_imageslider($id)
	{
		$load_product=$this->Homepage_Model->getSpecificImage($id);
		$dataPage['item'] = $load_product;
		
		$this->Homepage_Model->deleteImage($id);

		redirect ('AdminController/homepage');
	}

	//COMPANY PROFILE-----------------------------------------------------------------------------------------------

		public function index()
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

		// About--------------------------------------------------------------------------
		public function addAbout()
		{
			$config['upload_path'] = './assets/company_profile/img/about';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 200;

 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;
			
			if ( ! $this->upload->do_upload('img_file')) {
				$error = array('error' => $this->upload->display_errors());
				$data = array(
					'headerTitle' => 'Add About'
			 	);
			 	$this->load->view('admintemplates/head', $data);
				$this->load->view('admintemplates/navbar');
				$this->load->view('adminpages/crud_CompanyProfile/addAbout',$error);
				$this->load->view('admintemplates/footer');
			}
			else {

				$upload_data = $this->upload->data();

				$data = array(	
					'id' => $this->input->post('aboutID'),
					'date' => $this->input->post('aboutDate'),
					'title' => $this->input->post('aboutTitle'),
					'description' => $this->input->post('aboutDesc'),
					'img' => $upload_data['file_name']
				);
				$this->CompanyProfile_model->addAbout($data);
				
				redirect('AdminController/index');
			}		

		}


		// Staff--------------------------------------------------------------------------
		public function addStaff()
		{
			$config['upload_path'] = './assets/company_profile/img/staffs';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 500;

 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;
			
			if ( ! $this->upload->do_upload('img_file')) {
				$error = array('error' => $this->upload->display_errors());
				$data = array(
					'headerTitle' => 'Add Staff'
			 	);
			 	$this->load->view('admintemplates/head', $data);
				$this->load->view('admintemplates/navbar');
				$this->load->view('adminpages/crud_CompanyProfile/addStaff',$error);
				$this->load->view('admintemplates/footer');
			}
			else {

				$upload_data = $this->upload->data();

				$data = array(	
					'name' => $this->input->post('staffName'),	
					'job' => $this->input->post('staffJob'),
					'img' => $upload_data['file_name'],
					'twitter' => $this->input->post('staffTwitter'),
					'facebook' => $this->input->post('staffFB'),
					'linkedin' => $this->input->post('staffLinkedin')
				);
				$this->CompanyProfile_model->addStaff($data);
				
				redirect('AdminController/index');
			}		

		}





				
		// Partner------------------------------------------------------------------------
		public function addPartner()
		{
			$config['upload_path'] = './assets/company_profile/img/partners';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 200;

 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;
			
			if ( ! $this->upload->do_upload('img_file')) {
				$error = array('error' => $this->upload->display_errors());
				$data = array(
					'headerTitle' => 'Add Partner'
			 	);
			 	$this->load->view('admintemplates/head', $data);
				$this->load->view('admintemplates/navbar');
				$this->load->view('adminpages/crud_CompanyProfile/addPartner',$error);
				$this->load->view('admintemplates/footer');
			}
			else {

				$upload_data = $this->upload->data();

				$data = array(	
					'name' => $this->input->post('partnerName'),	
					'link' => $this->input->post('partnerLink'),
					'img' => $upload_data['file_name']
				);
				$this->CompanyProfile_model->addPartner($data);
				
				redirect('AdminController/index');
			}		

		}






	//news----------------------------------------------------------------------------------
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
		public function addnews(){

			$dataView = array(
				'headerTitle' => 'News',
			);

			$data = $dataView;

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/addNews');
			$this->load->view('admintemplates/footer');
		}
		public function insertNews()
		{
			$pic_name = $this->input->post('title');

			$config['upload_path']          = './assets/newspart/img/news/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('newsPicture')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('adminpages/addNews', $error);
			}else{

				$upload_data = $this->upload->data();

				$data = array(
					'title' => $this->input->post('title'),
					'type' => $this->input->post('type'),
					'postDate' => $this->input->post('postDate'),
					'newsDescription' => $this->input->post('newsDesc'),
					'imageNews' => $upload_data['file_name'],
				);
				
				$this->newsModel->insertNews($data);

				redirect('AdminController/news');
			}
		}

		public function deleteNewsConfirm($id){
			$dataView = array(
				'headerTitle' => 'News',
			);

			$dataPage['news'] = $this->newsModel->deleteNewsConfirm($id);

			$data = array_merge($dataView, $dataPage);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/deleteNews');
			$this->load->view('admintemplates/footer');
		}

		public function deleteNews($id){

			$this->newsModel->deleteNews($id);

			redirect('AdminController/news');
		}

		public function updateNewsConfirm($id){

			$dataView = array(
				'headerTitle' => 'News',
			);

			$dataPage['news'] = $this->newsModel->getNewsById($id);

			$data = array_merge($dataView, $dataPage);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/updateNews');
			$this->load->view('admintemplates/footer');
		}

		public function updateNews($id)
		{
			$pic_name = $this->input->post('title');

			$config['upload_path']          = './assets/newspart/img/news/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('newsPicture')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('adminpages/addNews', $error);
			}else{

				$upload_data = $this->upload->data();

				$data = array(
					'title' => $this->input->post('title'),
					'type' => $this->input->post('type'),
					'postDate' => $this->input->post('postDate'),
					'newsDescription' => $this->input->post('newsDesc'),
					'imageNews' => $upload_data['file_name'],
				);
				
				$this->newsModel->updateNews($id, $data);

				redirect('AdminController/news');
			}
		}


	//endnews----------------------------------------------------------------------------------

		public function insurance()
		{
			$dataView = array(
				'headerTitle' => 'insurance',
			);

		$load_product=$this->Product_Model->getProduct();
		$dataPage['InsuranceID'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/admin_product_list');
		$this->load->view('admintemplates/footer');

		

		
		}	

		public function update_insurance($id)
		{


					
			$dataView = array(
				'headerTitle' => 'insurance',
			);

		$load_product=$this->Product_Model->getProductDesc($id);
		$dataPage['item'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/updatepage_insurance');
		$this->load->view('admintemplates/footer');

			
		}
		public function insert_insurance()
		{
			
			
			$dataView = array(
				'headerTitle' => 'insurance',
			);

			$data = $dataView;

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('product/insertpage_insurance');
			$this->load->view('admintemplates/footer');
		}

		
		public function do_update_insurance($id)
		{

			$pic_name = $this->input->post('name');

			$config['upload_path']          = './assets/image/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{

				$upload_data = $this->upload->data();
			

				$data = array(
					'InsuranceName' => $this->input->post('name'),
					'InsurancePrice' => $this->input->post('price'),
					'InsuranceDesc' => $this->input->post('desc'),
					
					'InsuranceImage' => $upload_data['file_name'],
				);
				
				$this->Product_Model->update_insurance($id, $data);

				redirect('AdminController/insurance');

				}
		}
		public function do_insert_insurance()
		{

			$pic_name = $this->input->post('name');

			$config['upload_path']          = './assets/image/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{

				$upload_data = $this->upload->data();
			

				$data = array(
					'InsuranceName' => $this->input->post('name'),
					'InsurancePrice' => $this->input->post('price'),
					'InsuranceDesc' => $this->input->post('desc'),
					
					'InsuranceImage' => $upload_data['file_name'],
				);
				
				$this->Product_Model->insert_insurance( $data);

				redirect('AdminController/insurance');

				}
		}


		public function delete_insurance($id)
	{
			$dataView = array(
				'headerTitle' => 'insurance',
			);

		$load_product=$this->Product_Model->getProductDesc($id);
		$dataPage['item'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/deletepage_insurance');
		$this->load->view('admintemplates/footer');

	}
		public function do_delete_insurance($id)
	{
		
			$this->Product_Model->delete_insurance($id);

			redirect ('AdminController/insurance');
	}
	
		public function carparts()
		{
		$dataView = array(
				'headerTitle' => 'carparts',
			);

		$load_product=$this->Product_Model->getCarParts();
		$dataPage['CarPartsID'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/admin_carparts_list');
		$this->load->view('admintemplates/footer');


		
		}	
		public function update_carparts($id)
		{

				$dataView = array(
				'headerTitle' => 'carparts',
			);

		$load_product=$this->Product_Model->getCarPartsDesc($id);
		$dataPage['item'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/updatepage_carparts');
		$this->load->view('admintemplates/footer');

			
		}


		public function do_update_carparts($id)
		{


			$pic_name = $this->input->post('name');

			$config['upload_path']          = './assets/image/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{

				$upload_data = $this->upload->data();
			

				$data = array(
				'CarPartsName' =>	$this->input->post('name'),
			   'CarPartsPrice'=> $this->input->post('price'),
			   'CarPartsDesc'=> $this->input->post('desc'),
					
					'CarPartsImage' => $upload_data['file_name'],
				);
				
				$this->Product_Model->update_carparts($id, $data);

				redirect('AdminController/carparts');

				}
			

			$this->Product_Model->update_carparts($id, $arData);

			
			 redirect ('AdminController/carparts');

		}
			public function insert_carparts()
		{

			$dataView = array(
				'headerTitle' => 'carparts',
			);

			$data = $dataView;

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('product/insertpage_carparts');
			$this->load->view('admintemplates/footer');
			
		}
		public function do_insert_carparts()
		{

		$pic_name = $this->input->post('name');

			$config['upload_path']          = './assets/image/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{

				$upload_data = $this->upload->data();
			

				$data = array(
					'CarPartsName' => $this->input->post('name'),
					'CarPartsPrice' => $this->input->post('price'),
					'CarPartsDesc' => $this->input->post('desc'),
					
					'CarPartsImage' => $upload_data['file_name'],
				);
				
				$this->Product_Model->insert_carparts( $data);

				redirect('AdminController/carparts');

				}
		}
		public function delete_carparts($id)
		{
			$dataView = array(
				'headerTitle' => 'carparts',
			);

		$load_product=$this->Product_Model->getCarPartsDesc($id);
		$dataPage['item'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/deletepage_carparts');
		$this->load->view('admintemplates/footer');
		}

		public function do_delete_carparts($id)
	{
		
			$this->Product_Model->delete_carparts($id);

			redirect ('AdminController/carparts');
	}

		public function oil_fluid()
		{
		$dataView = array(
				'headerTitle' => 'oil and fluid',
			);

		$load_product=$this->Product_Model->getOilandFluid();
		$dataPage['OilandFluidID'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/admin_oil_fluid_list');
		$this->load->view('admintemplates/footer');
		
		}	
		public function update_oil_fluid($id)
		{
						$dataView = array(
				'headerTitle' => 'oil and fluid',
			);

		$load_product=$this->Product_Model->getOilandFluidDesc($id);
		$dataPage['item'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/updatepage_oil_fluid');
		$this->load->view('admintemplates/footer');

			
		}

		public function do_update_oil_fluid($id)
		{
			$pic_name = $this->input->post('name');

			$config['upload_path']          = './assets/image/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;

			
			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{
				$upload_data = $this->upload->data();
			 

			$arData = array(
			   'OilandFluidName' =>	$this->input->post('name'),
			   'OilandFluidPrice'=> $this->input->post('price'),
			   'OilandFluidDesc'=> $this->input->post('desc'),
			   'OilandFluidImage' => $upload_data['file_name'],
			);

			$this->Product_Model->update_oil_fluid($id, $arData);

			
			 redirect ('AdminController/oil_fluid');

				}
			}

			public function insert_oil_fluid()
		{

			
				$dataView = array(
				'headerTitle' => 'oil and fluid',
			);

			$data = $dataView;

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('product/insertpage_oil_fluid');
			$this->load->view('admintemplates/footer');
		}
		public function do_insert_oil_fluid()
		{


			
		$pic_name = $this->input->post('name');

			$config['upload_path']          = './assets/image/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{

				$upload_data = $this->upload->data();
			

				$data = array(
					'OilandFluidName' => $this->input->post('name'),
					'OilandFluidPrice' => $this->input->post('price'),
					'OilandFluidDesc' => $this->input->post('desc'),
					
					'OilandFluidImage' => $upload_data['file_name'],
				);
				
				$this->Product_Model->insert_oil_fluid( $data);

				redirect('AdminController/oil_fluid');
			}
		}




				public function delete_oil_fluid($id)
	{
			$dataView = array(
				'headerTitle' => 'oil and fluid',
			);

			$load_product=$this->Product_Model->getOilandFluidDesc($id);
			$dataPage['item'] = $load_product;

			$data = array_merge($dataView, $dataPage);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('product/deletepage_oil_fluid');
			$this->load->view('admintemplates/footer');
	}


		public function do_delete_oil_fluid($id)
	{
		
			$this->Product_Model->delete_oil_fluid($id);

			redirect ('AdminController/oil_fluid');
	}
		public function acc()
		{
		$dataView = array(
				'headerTitle' => 'accessory',
			);

		$load_product=$this->Product_Model->getAcc();
		$dataPage['AccessoryID'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/admin_acc_list');
		$this->load->view('admintemplates/footer');
		
		}	

		
		
		public function update_acc($id)
		{

					
				$dataView = array(
				'headerTitle' => 'accessory',
			);

		$load_product=$this->Product_Model->getAccDesc($id);
		$dataPage['item'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/updatepage_accessory');
		$this->load->view('admintemplates/footer');

		}

		public function do_update_acc($id)
		{
			$pic_name = $this->input->post('name');

			$config['upload_path']          = './assets/image/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;

			
			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{
				$upload_data = $this->upload->data();
			 

			$arData = array(
			   'AccessoryName' =>	$this->input->post('name'),
			   'AccessoryPrice'=> $this->input->post('price'),
			   'AccessoryDesc'=> $this->input->post('desc'),
			   'AccessoryImage'=> $upload_data['file_name'],
			);

	

			$this->Product_Model->update_acc($id, $arData);
					}
			
			 redirect ('AdminController/acc');

		}
			public function insert_acc()
		{

			
				$dataView = array(
				'headerTitle' => 'accessory',
			);

			$data = $dataView;

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('product/insertpage_acc');
			$this->load->view('admintemplates/footer');
		}

		public function do_insert_acc()
		{


			
			
		$pic_name = $this->input->post('name');

			$config['upload_path']          = './assets/image/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{

				$upload_data = $this->upload->data();
			

				$data = array(
					'AccessoryName' => $this->input->post('name'),
					'AccessoryPrice' => $this->input->post('price'),
					'AccessoryDesc' => $this->input->post('desc'),
					
					'AccessoryImage' => $upload_data['file_name'],
				);
				
				$this->Product_Model->insert_acc( $data);

				redirect('AdminController/acc');
			}
		}



			public function delete_acc($id)
	{
			$dataView = array(
				'headerTitle' => 'accessory',
			);

		$load_product=$this->Product_Model->getAccDesc($id);
		$dataPage['item'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/deletepage_acc');
		$this->load->view('admintemplates/footer');
	}

	
		public function do_delete_acc($id)
	{
		
			$this->Product_Model->delete_acc($id);

			redirect ('AdminController/acc');
	}




			public function usedcars()
		{
		$dataView = array(
				'headerTitle' => 'used cars',
			);

		$load_product=$this->Product_Model->getUsedCars();
		$dataPage['UsedCarsID'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/admin_usedcars_list');
		$this->load->view('admintemplates/footer');
		
		}	
		public function update_usedcars($id)
		{

			$dataView = array(
				'headerTitle' => 'used cars',
			);

		$load_product=$this->Product_Model->getUsedCarsDesc($id);
		$dataPage['item'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/updatepage_usedcars');
		$this->load->view('admintemplates/footer');
		}

		public function do_update_usedcars($id)
		{


			
			$pic_name = $this->input->post('name');

			$config['upload_path']          = './assets/image/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{

				$upload_data = $this->upload->data();
			

				$data = array(
				'UsedCarsName' =>	$this->input->post('name'),
			   'UsedCarsPrice'=> $this->input->post('price'),
			   'UsedCarsDesc'=> $this->input->post('desc'),
					
					'UsedCarsImage' => $upload_data['file_name'],
				);
				
				$this->Product_Model->update_usedcars($id, $data);

				redirect('AdminController/usedcars');

				}
			

			
		}
			public function insert_usedcars()
		{

			
				$dataView = array(
				'headerTitle' => 'used cars',
			);

			$data = $dataView;

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('product/insertpage_usedcars');
			$this->load->view('admintemplates/footer');
		}

		public function do_insert_usedcars()
		{

		
		$pic_name = $this->input->post('name');

			$config['upload_path']          = './assets/image/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['file_name'] = $pic_name;
	 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;


			if (!$this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{

				$upload_data = $this->upload->data();
			

				$data = array(
					'UsedCarsName' => $this->input->post('name'),
					'UsedCarsPrice' => $this->input->post('price'),
					'UsedCarsDesc' => $this->input->post('desc'),
					
					'UsedCarsImage' => $upload_data['file_name'],
				);
				
				$this->Product_Model->insert_usedcars( $data);

				redirect('AdminController/usedcars');
			}
		}



				public function delete_usedcars($id)
	{
				$dataView = array(
				'headerTitle' => 'used cars',
			);

		$load_product=$this->Product_Model->getUsedCarsDesc($id);
		$dataPage['item'] = $load_product;

		$data = array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/deletepage_usedcars');
		$this->load->view('admintemplates/footer');
	}

	
		public function do_delete_usedcars($id)
	{
		
			$this->Product_Model->delete_usedcars($id);

			redirect ('AdminController/usedcars');
	}




}
?>