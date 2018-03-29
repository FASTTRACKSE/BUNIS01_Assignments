<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Product_Model');
		$this->load->helper("url");
	}

public function index()


	{

		$data = array(
				'headTitle' => 'Garage HC Auto | Insurance',
		);

		$load_product=$this->Product_Model->getProduct();
		$dataPage['InsuranceID'] = $load_product;
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/Product_list', $dataPage);
		$this->load->view('templates/footer');

	}

	public function load_desc($id)
	{
		$data = array(
				'headTitle' => 'Garage HC Auto | Insurance',
		);
		
		$dataPage['item']=$this->Product_Model->getProductDesc($id);
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/Product_Description', $dataPage);
		$this->load->view('templates/footer');
	}

	public function carparts()


	{


		$data = array(
				'headTitle' => 'Garage HC Auto | Promoting Program',
		);

		$load_product=$this->Product_Model->getCarParts();
		$dataPage['CarPartsID'] = $load_product;
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/carparts_list', $dataPage);
		$this->load->view('templates/footer');

	
		
		
<<<<<<< HEAD
<<<<<<< HEAD
		$this->load->view('product/carparts_list', $data);
=======
>>>>>>> 62f619edb95b660ca5246c48cea84e0d5dc450ea
=======
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd

	}

	public function load_carparts_desc($id)
	{
		$data = array(
				'headTitle' => 'Garage HC Auto | Car Parts',
		);

		$dataPage['item']=$this->Product_Model->getCarPartsDesc($id);

		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/carparts_Description',$dataPage);
		$this->load->view('templates/footer');



		
<<<<<<< HEAD
<<<<<<< HEAD
		$data['item']=$this->Product_Model->getCarPartsDesc($id);
		
		$this->load->view('product/carparts_Description',$data);
=======
>>>>>>> 62f619edb95b660ca5246c48cea84e0d5dc450ea
=======
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd
	}

	public function accessory()


	{

				$data = array(
				'headTitle' => 'Garage HC Auto | Accessory',
		);

		$load_product=$this->Product_Model->getAcc();
		$dataPage['AccessoryID'] = $load_product;
		
<<<<<<< HEAD
<<<<<<< HEAD
		$this->load->view('product/acc_list', $data);
=======
=======
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/acc_list', $dataPage);
		$this->load->view('templates/footer');

<<<<<<< HEAD
>>>>>>> 62f619edb95b660ca5246c48cea84e0d5dc450ea
=======
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd

	}

	public function load_accessory_desc($id)
	{
		$data = array(
				'headTitle' => 'Garage HC Auto | Accessory',
		);

		$dataPage['item']=$this->Product_Model->getAccDesc($id);

		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/acc_Description',$dataPage);
		$this->load->view('templates/footer');

		
		
		
<<<<<<< HEAD
<<<<<<< HEAD
		$this->load->view('product/acc_Description',$data);
=======
>>>>>>> 62f619edb95b660ca5246c48cea84e0d5dc450ea
=======
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd
	}

	public function oilandfluid()


	
		{	

				$data = array(
				'headTitle' => 'Garage HC Auto | Oil and Fluid',
		);

		$load_product=$this->Product_Model->getOilandFluid();
		$dataPage['OilandFluidID'] = $load_product;
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/oil_fluid_list', $dataPage);
		$this->load->view('templates/footer');

		
<<<<<<< HEAD
<<<<<<< HEAD
		$this->load->view('product/oil_fluid_list', $data);
=======
>>>>>>> 62f619edb95b660ca5246c48cea84e0d5dc450ea
=======
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd

	}

	public function load_oil_fluid_desc($id)
	{
		
				

				$data = array(
				'headTitle' => 'Garage HC Auto | Oil and Fluid',
		);

		$dataPage['item']=$this->Product_Model->getOilandFluidDesc($id);
		
		
<<<<<<< HEAD
<<<<<<< HEAD
		$this->load->view('product/oil_fluid_Description',$data);
=======
=======
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd

		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/oil_fluid_Description', $dataPage);
		$this->load->view('templates/footer');

<<<<<<< HEAD
>>>>>>> 62f619edb95b660ca5246c48cea84e0d5dc450ea
=======
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd
	}
	public function usedcars()


	{

		
		
		
			

				$data = array(
				'headTitle' => 'Garage HC Auto | Used Cars',
		);

		$load_product=$this->Product_Model->getUsedCars();
		$dataPage['UsedCarsID'] = $load_product;
		
<<<<<<< HEAD
<<<<<<< HEAD
		$this->load->view('product/usedcars_list', $data);
=======
=======
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/usedcars_list', $dataPage);
		$this->load->view('templates/footer');
<<<<<<< HEAD
>>>>>>> 62f619edb95b660ca5246c48cea84e0d5dc450ea
=======
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd

	}

	public function load_usedcars_desc($id)
	{
			$data = array(
				'headTitle' => 'Garage HC Auto | Used Cars',
		);

		$dataPage['item']=$this->Product_Model->getUsedCarsDesc($id);
<<<<<<< HEAD
		
		

		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/usedcars_Description', $dataPage);
		$this->load->view('templates/footer');
		
		
		
<<<<<<< HEAD
		$this->load->view('product/usedcars_Description',$data);
=======
>>>>>>> 62f619edb95b660ca5246c48cea84e0d5dc450ea
=======
		
		

		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/usedcars_Description', $dataPage);
		$this->load->view('templates/footer');
		
		
		
>>>>>>> 6bbf6bc16f6dbdbc9b6faba836f8c7fe51a12afd
	}

	public function update($id)
	{
		// $arData = array(
		//   'UsedCarsName' =>	$this->input->post('name'),
		//    'UsedCarsPrice'=> $this->input->post('price')
		// );
		// $result= $this->Product_Model->update($arData);
		
			$dataPage['item']=$this->Product_Model->getUsedCarsDesc($id);
			 $this->load->view('product/updatepage',$dataPage);		
		
	}


}