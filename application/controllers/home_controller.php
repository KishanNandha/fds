
<?php
	class Home_controller extends CI_Controller
	{
		public function home()
		{
			
			if(!isset($_SESSION['username']))
				header('location:http://localhost/fds');
			$this->load->view("home");
			
		}
		public function newentry()
		{
			
		}
	}
?>