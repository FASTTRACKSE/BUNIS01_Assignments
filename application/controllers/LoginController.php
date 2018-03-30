<?php 

	class LoginController extends CI_Controller{
		public function login(){
			$this->load->view('adminpages/login');
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url().'index.php/StudentController/');
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
	}

 ?>