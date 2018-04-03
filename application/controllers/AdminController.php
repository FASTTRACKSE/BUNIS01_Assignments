<?php 

	class AdminController extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('pagination');
			$this->load->model('Homepage_Model');
			$this->load->model('CompanyProfile_model');
			$this->load->model('NewsModel');
			$this->load->model('Product_Model');
			$this->load->model('ServicesModel');
			$this->load->model('ServicesAdminModel');
			$this->load->model('LoginModel');

			if (!$this->session->userdata('username')) {
		        redirect('LoginController/login');
		    }
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url().'LoginController/login');
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

		public function index()
		{
			$data = array(
				'headerTitle' => 'Welcome, Admin!'
		 	);

		 	$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/welcome_admin');
			$this->load->view('admintemplates/footer');

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

		// Data---------------------------------------------------------------------------
		public function updateData($id)
		{
			$data = array(
				'headerTitle' => 'Update Data / '.$id
		 	);

			$data['data'] = $this->CompanyProfile_model->getDataById($id);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/crud_CompanyProfile/updateData');
			$this->load->view('admintemplates/footer');
			
			if ($this->input->post('update'))
			{
				$data = array(
				'type' => $this->input->post('dataType'),
		        'description'  => $this->input->post('dataDescription')
				);

				$this->CompanyProfile_model->updateData($id, $data);

				redirect('AdminController/companyProfile');						
			}

		}

		// About--------------------------------------------------------------------------
		public function addAbout()
		{
			$config['upload_path'] = './assets/company_profile/img/about/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 10000;

 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;
			
			if ( ! $this->upload->do_upload('img_file')) {
				$error = array('error' => $this->upload->display_errors());
				$data = array(
					'headerTitle' => 'Add New About'
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
				
				redirect('AdminController/companyProfile');
				
			}		

		}

		public function updateAbout($id)
		{
			$data = array(
				'headerTitle' => 'Update About / '.$id
		 	);

			$data['data'] = $this->CompanyProfile_model->getAboutById($id);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/crud_CompanyProfile/updateAbout');
			$this->load->view('admintemplates/footer');

		}

		public function do_updateAbout($id)
		{
			if ($this->input->post('update'))
			{
				$config['upload_path'] = './assets/company_profile/img/about/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 10000;

	 
				$this->load->library('upload', $config);
				$this->upload->overwrite = true;
				$this->upload->do_upload('img_file');

				$upload_data = $this->upload->data();

				$aboutDate = $this->input->post('updateDate');
				$aboutTitle = $this->input->post('updateTitle');
				$aboutDesc = $this->input->post('updateDesc');
				$image = $upload_data['file_name'];

				if ($image == NULL) {
					$data = array(	
					'date' => $aboutDate,
					'title' => $aboutTitle,
					'description' => $aboutDesc
					);
				}
				else
				{
					$data = array(	
					'date' => $aboutDate,
					'title' => $aboutTitle,
					'description' => $aboutDesc,
					'img' => $image
					);
				}
				
				$this->CompanyProfile_model->updateAbout($id,$data);
				
				redirect('AdminController/companyProfile');	
			}

		}

		public function deleteAbout($id){
			$data = array(
				'headerTitle' => 'Delete About / '.$id
		 	);

			$data['data'] = $this->CompanyProfile_model->getAboutById($id);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/crud_CompanyProfile/deleteAbout');
			$this->load->view('admintemplates/footer');
		}

		public function do_deleteAbout($id){
			$this->CompanyProfile_model->deleteAbout($id);

			redirect('AdminController/companyProfile');
		}



		// Staff--------------------------------------------------------------------------
		public function addStaff()
		{
			$config['upload_path'] = './assets/company_profile/img/staffs/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 10000;

 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;
			
			if ( ! $this->upload->do_upload('img_file')) {
				$error = array('error' => $this->upload->display_errors());
				$data = array(
					'headerTitle' => 'Add New Staff'
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
				
				redirect('AdminController/companyProfile');
			}		

		}

		public function updateStaff($id)
		{
			$data = array(
				'headerTitle' => 'Update Staff / '.$id
		 	);

			$data['data'] = $this->CompanyProfile_model->getStaffById($id);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/crud_CompanyProfile/updateStaff');
			$this->load->view('admintemplates/footer');

		}

		public function do_updateStaff($id)
		{
			if ($this->input->post('update'))
			{
				$config['upload_path'] = './assets/company_profile/img/staffs/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 10000;
	 
				$this->load->library('upload', $config);
				$this->upload->overwrite = true;
				$this->upload->do_upload('img_file');

				$upload_data = $this->upload->data();

				$name = $this->input->post('updateName');
				$job = $this->input->post('updateJob');
				$twitter = $this->input->post('updateTwitter');
				$facebook = $this->input->post('updateFB');
				$linkedin = $this->input->post('updateLinkedin');
				$image = $upload_data['file_name'];

				if ($image == NULL) {
					$data = array(	
					'name' => $name,	
					'job' => $job,
					'twitter' => $twitter,
					'facebook' => $facebook,
					'linkedin' => $linkedin
					);
				}
				else
				{
					$data = array(	
					'name' => $name,	
					'job' => $job,
					'img' => $image,
					'twitter' => $twitter,
					'facebook' => $facebook,
					'linkedin' => $linkedin
					);
				}
				
				$this->CompanyProfile_model->updateStaff($id,$data);
				
				redirect('AdminController/companyProfile');	
			}

		}

		public function deleteStaff($id){
			$data = array(
				'headerTitle' => 'Delete Staff / '.$id
		 	);

			$data['data'] = $this->CompanyProfile_model->getStaffById($id);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/crud_CompanyProfile/deleteStaff');
			$this->load->view('admintemplates/footer');
		}

		public function do_deleteStaff($id){
			$this->CompanyProfile_model->deleteStaff($id);

			redirect('AdminController/companyProfile');
		}


		// Partner------------------------------------------------------------------------
		public function addPartner()
		{
			$config['upload_path'] = './assets/company_profile/img/partners/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 10000;

 
			$this->load->library('upload', $config);
			$this->upload->overwrite = true;
			
			if ( ! $this->upload->do_upload('img_file')) {
				$error = array('error' => $this->upload->display_errors());
				$data = array(
					'headerTitle' => 'Add New Partner'
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
				
				redirect('AdminController/companyProfile');
			}		

		}

		public function updatePartner($id)
		{
			$data = array(
				'headerTitle' => 'Update Partner / '.$id
		 	);

			$data['data'] = $this->CompanyProfile_model->getPartnerById($id);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/crud_CompanyProfile/updatePartner');
			$this->load->view('admintemplates/footer');

		}

		public function do_updatePartner($id)
		{
			if ($this->input->post('update'))
			{
				$config['upload_path'] = './assets/company_profile/img/partners/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 10000;

	 
				$this->load->library('upload', $config);
				$this->upload->overwrite = true;
				$this->upload->do_upload('img_file');


				$upload_data = $this->upload->data();

				$name = $this->input->post('updateName');
				$link = $this->input->post('updateLink');
				$image = $upload_data['file_name'];

				if ($image == NULL) {
					$data = array(	
					'name' => $name,	
					'link' => $link,
					);
				}
				else
				{
					$data = array(	
					'name' => $name,	
					'link' => $link,
					'img' => $image,
					);
				}
				
				$this->CompanyProfile_model->updatePartner($id,$data);
				
				redirect('AdminController/companyProfile');	
			}

		}

		public function deletePartner($id){
			$data = array(
				'headerTitle' => 'Delete Partner / '.$id
		 	);

			$data['data'] = $this->CompanyProfile_model->getPartnerById($id);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/crud_CompanyProfile/deletePartner');
			$this->load->view('admintemplates/footer');
		}

		public function do_deletePartner($id){
			$this->CompanyProfile_model->deletePartner($id);

			redirect('AdminController/companyProfile');
		}






	//news----------------------------------------------------------------------------------
		public function news(){
			$config['base_url'] = base_url().'AdminController/news/';
			$config['total_rows'] = $this->db->get('news')->num_rows();
			$config['per_page'] = 5;
			$config['num_links'] = 3;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			$dataView = array(
				'headerTitle' => 'News',
			);

			$dataPage['news_list'] = $this->NewsModel->getList($config['per_page'], $this->uri->segment(3));

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
				
				$this->NewsModel->insertNews($data);

				redirect('AdminController/news');
			}
		}

		public function deleteNewsConfirm($id){
			$dataView = array(
				'headerTitle' => 'News',
			);

			$dataPage['news'] = $this->NewsModel->deleteNewsConfirm($id);

			$data = array_merge($dataView, $dataPage);

			$this->load->view('admintemplates/head', $data);
			$this->load->view('admintemplates/navbar');
			$this->load->view('adminpages/deleteNews');
			$this->load->view('admintemplates/footer');
		}

		public function deleteNews($id){

			$this->NewsModel->deleteNews($id);

			redirect('AdminController/news');
		}

		public function updateNewsConfirm($id){

			$dataView = array(
				'headerTitle' => 'News',
			);

			$dataPage['news'] = $this->NewsModel->getNewsById($id);

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
				
				$this->NewsModel->updateNews($id, $data);

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

				redirect('AdminController/getallproduct');

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

				redirect('AdminController/getallproduct');

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

			redirect ('AdminController/getallproduct');
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

				redirect('AdminController/getallproduct');

				}
			

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

				redirect('AdminController/getallproduct');

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

			redirect ('AdminController/getallproduct');
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

			
			 redirect ('AdminController/getallproduct');

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

				redirect('AdminController/getallproduct');
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

			redirect ('AdminController/getallproduct');
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
			
			 redirect ('AdminController/getallproduct');

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

				redirect('AdminController/getallproduct');
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

			redirect ('AdminController/getallproduct');
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

				redirect('AdminController/getallproduct');

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

				redirect('AdminController/getallproduct');
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

			redirect ('AdminController/getallproduct');
	}

	public function getallproduct()
	{

		$dataView = array(
				'headerTitle' => 'Product',
			);

		$load_insurance=$this->Product_Model->getProduct();
		$dataPageInsurance['InsuranceID'] = $load_insurance;

		$load_carparts=$this->Product_Model->getCarParts();
		$dataPageCarParts['CarPartsID'] = $load_carparts;

		$load_oilandfluid=$this->Product_Model->getOilandFluid();
		$dataPageOilandFluid['OilandFluidID'] = $load_oilandfluid;

		$load_accessory=$this->Product_Model->getAcc();
		$dataPageAcc['AccessoryID'] = $load_accessory;

		$load_usedcars=$this->Product_Model->getUsedCars();
		$dataPageUsedCars['UsedCarsID'] = $load_usedcars;

		$data = array_merge($dataView, $dataPageInsurance,$dataPageCarParts,$dataPageOilandFluid,$dataPageAcc,$dataPageUsedCars);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('product/admin_productpage');
		$this->load->view('admintemplates/footer');



	}

	//services

	//admin
	public function registerService(){
		$data = array(
			'headerTitle' => 'Services',
		);
		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('services/insertIndex');
		$this->load->view('admintemplates/footer');
	}

    public function insertService()
        {
            $pic_name = $this->input->post('fName');

            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['file_name'] = $pic_name;
     
            $this->load->library('upload', $config);
            $this->upload->overwrite = true;


            if (!$this->upload->do_upload('picFile')){
                $error = array('error' => $this->upload->display_errors());
            }else{

                $upload_data = $this->upload->data();

                $data = array(
					"name" =>$this->input->post("fName"),
					"description" =>$this->input->post("fDesc"),
					"tag" =>$this->input->post("fTag"),
                    "picture" => $upload_data['file_name'],
                );
                
                $this->ServicesAdminModel->insert_Data($data);

                redirect('AdminController/viewAdminService');
            }
        }

    public function updateService($ID)
        {
            $pic_name = $this->input->post('fName');

            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['file_name'] = $pic_name;
     
            $this->load->library('upload', $config);
            $this->upload->overwrite = true;


            if (!$this->upload->do_upload('picFile')){
                $error = array('error' => $this->upload->display_errors());
            }else{

                $upload_data = $this->upload->data();

                $data = array(
					"name" =>$this->input->post("fName"),
					"description" =>$this->input->post("fDesc"),
					"tag" =>$this->input->post("fTag"),
                    "picture" => $upload_data['file_name'],
                );
                
                $this->ServicesAdminModel->update_Data_by_ID($ID,$data);

                redirect('AdminController/viewAdminService');
            }
        }

	public function viewAdminService(){

		$config["base_url"] = base_url()."index.php/AdminController/view";
		$config["total_rows"] = $this->db->get('service')->num_rows();
		$config["per_page"] = 5;
		$config["num_limits"] = 5;

		$this->pagination->initialize($config);

		$dataPage['getDataPagination'] = $this->ServicesAdminModel->getPagination($config['per_page'],
			$this->uri->segment(3));

		$dataHead = array(
			'headerTitle' => 'Services',
		);

		$data = array_merge($dataPage, $dataHead);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('services/servicesAdminIndex');
		$this->load->view('admintemplates/footer');
 	}

	public function toDelete($ID){
		$dataHead = array(
			'headerTitle' => 'Services',
		);
		$dataPage['row'] = $this->ServicesAdminModel->get_Data_by_ID($ID);

		$data = array_merge($dataHead, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('services/deleteIndex');
		$this->load->view('admintemplates/footer');
	}

	public function deleteService($deleteID){;
		$this->ServicesAdminModel->delete_Data_by_ID($deleteID);
		redirect("AdminController/viewAdminService");
	}

	public function toUpdate($ID){
		$data = array(
			'headerTitle' => 'Services',
		);
		$data["row"] = $this->ServicesAdminModel->get_Data_by_ID($ID);
		$this->load->view('admintemplates/head');
		$this->load->view('admintemplates/navbar');
		$this->load->view('services/updateIndex', $data);
		$this->load->view('admintemplates/footer');
	}

	//front end

// view index
	public function viewService(){
		$data = array(
			'headtitle' => 'Services',
		);
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('services/services');
		$this->load->view('templates/footer');
	}

// body index
	public function showBody(){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->ServicesModel->get_Body();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view('services/bodyIndex');
		$this->load->view('templates/footer');
	}

//car rescue index
	public function showCarRescue(){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->ServicesModel->get_CarRescue();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/carRescueIndex");
		$this->load->view('templates/footer');
	}

//d2d index
	public function showD2D(){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->ServicesModel->get_D2D();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/d2dIndex");
		$this->load->view('templates/footer');
	}

//electrical index
	public function showElectrical(){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->ServicesModel->get_Electrical();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/electricalIndex");
		$this->load->view('templates/footer');
	}

//engine index
	public function showEngine(){
		$dataHeader = array(
			'headtitle' => 'Body',
		);
		$dataModel["getData"] = $this->ServicesModel->get_Engine();
		$data=array_merge($dataHeader, $dataModel);
		$this->load->view('templates/head',$data);
		$this->load->view('templates/navbar');
		$this->load->view("services/engineIndex");
		$this->load->view('templates/footer');
	}


//adminsettings
	public function adminSettings(){
		$dataView = array(
				'headerTitle' => 'Settings',
		);

		$dataPage['admin'] = $this->LoginModel->getAdminDetail();
		$data=array_merge($dataView, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('adminpages/settings');
		$this->load->view('admintemplates/footer');
	}

	public function changePassword(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$this->LoginModel->updatePassword($data);

		redirect('AdminController/adminSettings');
	}



}
?>