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

		$load_product=$this->Product_Model->getProduct();
		$data['InsuranceID'] = $load_product;
		
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('product/Product_list', $data);
		$this->load->view('templates/footer');

	}

	public function load_desc($id)
	{
		
		$data['item']=$this->Product_Model->getProductDesc($id);
		
		$this->load->view('product/Product_Description',$data);
	}

	public function carparts()


	{

		$load_product=$this->Product_Model->getCarParts();
		$data['CarPartsID'] = $load_product;
		
		$this->load->view('product/carparts_list', $data);

	}

	public function load_carparts_desc($id)
	{
		
		$data['item']=$this->Product_Model->getCarPartsDesc($id);
		
		$this->load->view('product/carparts_Description',$data);
	}

	public function accessory()


	{

		$load_product=$this->Product_Model->getAcc();
		$data['AccessoryID'] = $load_product;
		
		$this->load->view('product/acc_list', $data);

	}

	public function load_accessory_desc($id)
	{
		
		$data['item']=$this->Product_Model->getAccDesc($id);
		
		$this->load->view('product/acc_Description',$data);
	}

	public function oilandfluid()


	{

		$load_product=$this->Product_Model->getOilandFluid();
		$data['OilandFluidID'] = $load_product;
		
		$this->load->view('product/oil_fluid_list', $data);

	}

	public function load_oil_fluid_desc($id)
	{
		
		$data['item']=$this->Product_Model->getOilandFluidDesc($id);
		
		$this->load->view('product/oil_fluid_Description',$data);
	}
	public function usedcars()


	{

		$load_product=$this->Product_Model->getUsedCars();
		$data['UsedCarsID'] = $load_product;
		
		$this->load->view('product/usedcars_list', $data);

	}

	public function load_usedcars_desc($id)
	{
		
		$data['item']=$this->Product_Model->getUsedCarsDesc($id);
		
		$this->load->view('product/usedcars_Description',$data);
	}

	public function update()
	{
		// $arData = array(
		//   'UsedCarsName' =>	$this->input->post('name'),
		//    'UsedCarsPrice'=> $this->input->post('price')
		// );
		// $result= $this->Product_Model->update($arData);
		
		
			 $this->load->view('updatepage');		
		
	}


}