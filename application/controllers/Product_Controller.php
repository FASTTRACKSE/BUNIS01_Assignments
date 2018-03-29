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
		

		$this->load->view('product/acc_list', $data);

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
		
		
		

		
		

		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view('product/usedcars_Description', $dataPage);
		$this->load->view('templates/footer');
		
		
	}

	public function update_usedcars($id)
	{
		// $arData = array(
		//   'UsedCarsName' =>	$this->input->post('name'),
		//    'UsedCarsPrice'=> $this->input->post('price')
		// );
		// $result= $this->Product_Model->update($arData);
		
			$dataPage['item']=$this->Product_Model->getUsedCarsDesc($id);
			 $this->load->view('product/updatepage_usedcars',$dataPage);		
		
	}
	public function do_update_usedcars($id){
			$arData = array(
		  'UsedCarsName' =>	$this->input->post('name'),
		   'UsedCarsPrice'=> $this->input->post('price'),
		   'UsedCarsDesc'=> $this->input->post('desc')
		);
		$result= $this->Product_Model->update_usedcars($id,$arData);
		
			 redirect('/Product_Controller/usedcars');		
		
	}
	public function update_insurance($id)
	{
		// $arData = array(
		//   'UsedCarsName' =>	$this->input->post('name'),
		//    'UsedCarsPrice'=> $this->input->post('price')
		// );
		// $result= $this->Product_Model->update($arData);
		
			$dataPage['item']=$this->Product_Model->getProductDesc($id);
			 $this->load->view('product/updatepage_insurance',$dataPage);		
		
	}
	public function do_update_insurance($id){
			$arData = array(
		  'InsuranceName' =>	$this->input->post('name'),
		   'InsurancePrice'=> $this->input->post('price'),
		   'InsuranceDesc'=> $this->input->post('desc')
		);

		$this->Product_Model->update_insurance($id, $arData);

			redirect('/Product_Controller/index');
	}
	public function update_acc($id)
	{
		// $arData = array(
		//   'UsedCarsName' =>	$this->input->post('name'),
		//    'UsedCarsPrice'=> $this->input->post('price')
		// );
		// $result= $this->Product_Model->update($arData);
		
			$dataPage['item']=$this->Product_Model->getAccDesc($id);
			 $this->load->view('product/updatepage_accessory',$dataPage);		
		
	}
	public function do_update_acc($id){
			$arData = array(
		  'AccessoryName' =>	$this->input->post('name'),
		   'AccessoryPrice'=> $this->input->post('price'),
		   'AccessoryDesc'=> $this->input->post('desc')
		);
		$result= $this->Product_Model->update_acc($id,$arData);
		
			redirect('/Product_Controller/accessory');		
		
	}
		public function update_oil_fluid($id)
	{
		// $arData = array(
		//   'UsedCarsName' =>	$this->input->post('name'),
		//    'UsedCarsPrice'=> $this->input->post('price')
		// );
		// $result= $this->Product_Model->update($arData);
		
			$dataPage['item']=$this->Product_Model->getOilandFluidDesc($id);
			 $this->load->view('product/updatepage_oil_fluid',$dataPage);		
		
	}
	public function do_update_oil_fluid($id){
			$arData = array(
		  'OilandFluidName' =>	$this->input->post('name'),
		   'OilandFluidPrice'=> $this->input->post('price'),
		   'OilandFluidDesc'=> $this->input->post('desc')
		);
		$result= $this->Product_Model->update_oil_fluid($id,$arData);
		
			redirect('/Product_Controller/oilandfluid');		
		
	}

		public function update_carparts($id)
	{
		// $arData = array(
		//   'UsedCarsName' =>	$this->input->post('name'),
		//    'UsedCarsPrice'=> $this->input->post('price')
		// );
		// $result= $this->Product_Model->update($arData);
		
			$dataPage['item']=$this->Product_Model->getCarPartsDesc($id);
			 $this->load->view('product/updatepage_carparts',$dataPage);		
		
	}
	public function do_update_carparts($id){
			$arData = array(
		  'CarPartsName' =>	$this->input->post('name'),
		   'CarPartsPrice'=> $this->input->post('price'),
		   'CarPartsDesc'=> $this->input->post('desc')
		);
		$result= $this->Product_Model->update_carparts($id,$arData);
		redirect('/Product_Controller/carparts');		
		
	}
	public function insert_insurance()
	{
		
        $this->load->view('product/insertpage_insurance');		

	}
	public function do_insert_insurance(){
		$arData = array(
		  'InsuranceName' =>$this->input->post('name'),
		   'InsurancePrice'=> $this->input->post('price'),
		   'InsuranceDesc'=> $this->input->post('desc')
		);
			$result= $this->Product_Model->insert_insurance($arData);
			redirect('/Product_Controller/index');
		
	}



}