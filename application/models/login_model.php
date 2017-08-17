<?php
	class Login_model extends CI_Model
	{
		public function chk_login($username,$password)
		{
			$con=array('username'=>$username,'password'=>$password);
			$this->db->where($con);
			$q=$this->db->get('users');
			if($q->num_rows()==1)
				{
					return $q->row('username');
				}
			else
				{
					return false;
				}
		}
	}
?>