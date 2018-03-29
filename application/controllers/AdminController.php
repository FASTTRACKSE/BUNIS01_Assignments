<?php 

	class AdminController extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('CompanyProfile_model');
			$this->load->model('newsModel');
			$this->load->library('pagination');
			$this->load->model('Product_Model');
			$this->load->helper("url");
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

		public function insurance()
		{
		$load_product=$this->Product_Model->getProduct();
		$dataPage['InsuranceID'] = $load_product;
		$this->load->view('product/admin_product_list', $dataPage);

		
		}	

		public function update_insurance($id)
		{

			$dataPage['item']=$this->Product_Model->getProductDesc($id);
			$this->load->view('product/updatepage_insurance', $dataPage);
		}
		public function insert_insurance()
		{

			
			$this->load->view('product/insertpage_insurance');
		}

		public function do_update_insurance($id)
		{


<<<<<<< HEAD
			$arData = array(
			   'InsuranceName' =>	$this->input->post('name'),
			   'InsurancePrice'=> $this->input->post('price'),
			   'InsuranceDesc'=> $this->input->post('desc'),
			   'InsuranceImage'=> $this->input->post('image')
			);

			$this->Product_Model->update_insurance($id,$arData);

			
			 redirect ('AdminController/insurance');

		}
		public function do_insert_insurance()
		{


			$arData = array(
			   'InsuranceName' =>	$this->input->post('name'),
			   'InsurancePrice'=> $this->input->post('price'),
			   'InsuranceDesc'=> $this->input->post('desc'),
			   'InsuranceImage'=> $this->input->post('image')
			);

			$this->Product_Model->insert_insurance( $arData);

			
			 redirect ('AdminController/insurance');
		}

		public function delete_insurance($id)
	{
			$dataPage['item']=$this->Product_Model->getProductDesc($id);
			$this->load->view('product/deletepage_insurance',$dataPage);
=======
		

>>>>>>> eff064a348df228449e530c19271c52babe62b5c
	}
		public function do_delete_insurance($id)
	{
		
			$this->Product_Model->delete_insurance($id);

			redirect ('AdminController/insurance');
	}
	
		public function carparts()
		{
		$load_product=$this->Product_Model->getCarParts();
		$dataPage['CarPartsID'] = $load_product;
		$this->load->view('product/admin_carparts_list', $dataPage);

		
		}	
		public function update_carparts($id)
		{

			$dataPage['item']=$this->Product_Model->getCarPartsDesc($id);
			$this->load->view('product/updatepage_carparts', $dataPage);
		}


		public function do_update_carparts($id)
		{


			$arData = array(
			   'CarPartsName' =>	$this->input->post('name'),
			   'CarPartsPrice'=> $this->input->post('price'),
			   'CarPartsDesc'=> $this->input->post('desc'),
			   'CarPartsImage'=> $this->input->post('image')
			);

			$this->Product_Model->update_carparts($id, $arData);

			
			 redirect ('AdminController/carparts');

		}
			public function insert_carparts()
		{

			
			$this->load->view('product/insertpage_carparts');
		}
		public function do_insert_carparts()
		{


			$arData = array(
			   'CarPartsName' =>	$this->input->post('name'),
			   'CarPartsPrice'=> $this->input->post('price'),
			   'CarPartsDesc'=> $this->input->post('desc'),
			   'CarPartsImage'=> $this->input->post('image')
			);

			$this->Product_Model->insert_carparts( $arData);

			
			 redirect ('AdminController/carparts');
		}
			public function delete_carparts($id)
	{
			$dataPage['item']=$this->Product_Model->getCarPartsDesc($id);
			$this->load->view('product/deletepage_carparts',$dataPage);
	}
		public function do_delete_carparts($id)
	{
		
			$this->Product_Model->delete_carparts($id);

			redirect ('AdminController/carparts');
	}

		public function oil_fluid()
		{
		$load_product=$this->Product_Model->getOilandFluid();
		$dataPage['OilandFluidID'] = $load_product;
		$this->load->view('product/admin_oil_fluid_list', $dataPage);

		
		}	
		public function update_oil_fluid($id)
		{

			$dataPage['item']=$this->Product_Model->getOilandFluidDesc($id);
			$this->load->view('product/updatepage_oil_fluid', $dataPage);
		}

		public function do_update_oil_fluid($id)
		{


			$arData = array(
			   'OilandFluidName' =>	$this->input->post('name'),
			   'OilandFluidPrice'=> $this->input->post('price'),
			   'OilandFluidDesc'=> $this->input->post('desc'),
			   'OilandFluidImage'=> $this->input->post('image')
			);

			$this->Product_Model->update_oil_fluid($id, $arData);

			
			 redirect ('AdminController/oil_fluid');

		}

			public function insert_oil_fluid()
		{

			
			$this->load->view('product/insertpage_oil_fluid');
		}
		public function do_insert_oil_fluid()
		{


			$arData = array(
			   'OilandFluidName' =>	$this->input->post('name'),
			   'OilandFluidPrice'=> $this->input->post('price'),
			   'OilandFluidDesc'=> $this->input->post('desc'),
			   'OilandFluidImage'=> $this->input->post('image')
			);

			$this->Product_Model->insert_oil_fluid( $arData);

			
			 redirect ('AdminController/oil_fluid');
		}




				public function delete_oil_fluid($id)
	{
			$dataPage['item']=$this->Product_Model->getOilandFluidDesc($id);
			$this->load->view('product/deletepage_oil_fluid',$dataPage);
	}


		public function do_delete_oil_fluid($id)
	{
		
			$this->Product_Model->delete_oil_fluid($id);

			redirect ('AdminController/oil_fluid');
	}
		public function acc()
		{
		$load_product=$this->Product_Model->getAcc();
		$dataPage['AccessoryID'] = $load_product;
		$this->load->view('product/admin_acc_list', $dataPage);

		
		}	
		public function update_acc($id)
		{

			$dataPage['item']=$this->Product_Model->getAccDesc($id);
			$this->load->view('product/updatepage_accessory', $dataPage);
		}

		public function do_update_acc($id)
		{


			$arData = array(
			   'AccessoryName' =>	$this->input->post('name'),
			   'AccessoryPrice'=> $this->input->post('price'),
			   'AccessoryDesc'=> $this->input->post('desc'),
			   'AccessoryImage'=> $this->input->post('image')
			);

			$this->Product_Model->update_acc($id, $arData);

			
			 redirect ('AdminController/acc');

		}
			public function insert_acc()
		{

			
			$this->load->view('product/insertpage_acc');
		}

		public function do_insert_acc()
		{


			$arData = array(
			   'AccessoryName' =>$this->input->post('name'),
			   'AccessoryPrice'=> $this->input->post('price'),
			   'AccessoryDesc'=> $this->input->post('desc'),
			   'AccessoryImage'=> $this->input->post('image')
			);

			$this->Product_Model->insert_acc( $arData);

			
			 redirect ('AdminController/acc');
		}



			public function delete_acc($id)
	{
			$dataPage['item']=$this->Product_Model->getAccDesc($id);
			$this->load->view('product/deletepage_acc',$dataPage);
	}

	
		public function do_delete_acc($id)
	{
		
			$this->Product_Model->delete_acc($id);

			redirect ('AdminController/acc');
	}




			public function usedcars()
		{
		$load_product=$this->Product_Model->getUsedCars();
		$dataPage['UsedCarsID'] = $load_product;
		$this->load->view('product/admin_usedcars_list', $dataPage);

		
		}	
		public function update_usedcars($id)
		{

			$dataPage['item']=$this->Product_Model->getUsedCarsDesc($id);
			$this->load->view('product/updatepage_usedcars', $dataPage);
		}

		public function do_update_usedcars($id)
		{


			$arData = array(
			   'UsedCarsName' =>$this->input->post('name'),
			   'UsedCarsPrice'=> $this->input->post('price'),
			   'UsedCarsDesc'=> $this->input->post('desc'),
			   'UsedCarsImage'=> $this->input->post('image')
			);

			$this->Product_Model->update_usedcars($id, $arData);

			
			 redirect ('AdminController/usedcars');

		}
			public function insert_usedcars()
		{

			
			$this->load->view('product/insertpage_usedcars');
		}

		public function do_insert_usedcars()
		{


			$arData = array(
			   'UsedCarsName' =>$this->input->post('name'),
			   'UsedCarsPrice'=> $this->input->post('price'),
			   'UsedCarsDesc'=> $this->input->post('desc'),
			   'UsedCarsImage'=> $this->input->post('image')
			);

			$this->Product_Model->insert_usedcars( $arData);

			
			 redirect ('AdminController/usedcars');
		}



				public function delete_usedcars($id)
	{
			$dataPage['item']=$this->Product_Model->getUsedCarsDesc($id);
			$this->load->view('product/deletepage_usedcars',$dataPage);
	}

	
		public function do_delete_usedcars($id)
	{
		
			$this->Product_Model->delete_usedcars($id);

			redirect ('AdminController/usedcars');
	}




}
?>