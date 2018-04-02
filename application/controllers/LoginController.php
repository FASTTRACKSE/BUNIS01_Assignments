<?php 

	class LoginController extends CI_Controller{
		public function login(){
			$this->load->view('adminpages/login');
		}

		public function loginValidation(){

			$this->load->model('LoginModel');

			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$rs= $this->LoginModel->checkLogin($username, $password);

			if($this->LoginModel->checkLogin($username, $password)){

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