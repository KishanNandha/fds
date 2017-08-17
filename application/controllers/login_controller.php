<?php
	class Login_controller extends CI_Controller
	{
		public function login()
		{
			$this->load->view('login_view');
		}
		public function do_login()
		{
			$username=$this->input->post("username");
			$password=$this->input->post("password");
			$this->load->model("login_model");
			$uname=$this->login_model->chk_login($username,$password);
			if($uname)
			{
				session_start();
				$_SESSION['username']=$username;
				redirect('home_controller/home');
			}
			else
			{

				redirect('Login_controller/login');
			}
		}
	}
?>