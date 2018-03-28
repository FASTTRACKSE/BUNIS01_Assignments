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



		
	}

	public function accessory()


	{

				$data = array(
				'headTitle' => 'Garage HC Auto | Accessory',
		);

		$load_product=$this->Product_Model->getAcc();
		$dataPage['AccessoryID'] = $load_product;
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/acc_list', $dataPage);
		$this->load->view('templates/footer');


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

		

	}

	public function load_oil_fluid_desc($id)
	{
		
				

				$data = array(
				'headTitle' => 'Garage HC Auto | Oil and Fluid',
		);

		$dataPage['item']=$this->Product_Model->getOilandFluidDesc($id);
		
		

		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/oil_fluid_Description', $dataPage);
		$this->load->view('templates/footer');

	}
	public function usedcars()


	{

		
		
		
			

				$data = array(
				'headTitle' => 'Garage HC Auto | Used Cars',
		);

		$load_product=$this->Product_Model->getUsedCars();
		$dataPage['UsedCarsID'] = $load_product;
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/usedcars_list', $dataPage);
		$this->load->view('templates/footer');

	}

	public function load_usedcars_desc($id)
	{
			$data = array(
				'headTitle' => 'Garage HC Auto | Used Cars',
		);

		$dataPage['item']=$this->Product_Model->getUsedCarsDesc($id);
		
		

		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/usedcars_Description', $dataPage);
		$this->load->view('templates/footer');
		
		
		
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