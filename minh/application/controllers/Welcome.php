<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function loginaction()
	{
		$pass = $this->input->post("password");
		if($pass == 'W&S1017') // Login success
		{
			$id = $this->Mlogin->CreateNew(array('email'=>'', 'facebook'=>'', 'phone'=>'', 'Update'=> 0));
			echo "<script>localStorage.setItem('id', {$id});</script>";
				
			$this->load->view('user');
		}
		else{
			echo 'Sai password moi dang nhap lai';	
		}
	}
}
