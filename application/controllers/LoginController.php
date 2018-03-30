<?php 

	class LoginController extends CI_Controller{
		public function login(){
			$this->load->view('adminpages/login');
		}

		public function loginValidation(){

			$this->load->model('loginModel');

			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$rs= $this->loginModel->checkLogin($username, $password);

			if($this->loginModel->checkLogin($username, $password)){

				$session_data = array(
					'username' => $username
				);
				
				$this->session->set_userdata($session_data);
				redirect(base_url().'index.php/AdminController/');
			}
			else{
				redirect(base_url().'index.php/LoginController/login');
	            
			}
		}
		
	}

 ?>