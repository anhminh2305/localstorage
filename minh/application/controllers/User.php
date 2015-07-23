<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	
	public function index()
	{
		$this->load->view('user');
	}

	public function update(){
		$id_local = $this->input->post('id');
		$email = $this->input->post('email');
		$fb = $this->input->post('facebook');
		$phone = $this->input->post('phone');

		$arr = $this->Mlogin->Search($id_local);
		foreach ($arr as $key) {
			$update = $key->Update;
		}

		if($update == 0){
			$data =  array('email'=>$email, 'facebook'=>$fb, 'phone'=>$phone, 'Update'=>1);
			$this->Mlogin->Update((int)$id_local, $email, $fb, $phone);
			$this->sendMail($email);
		//	$this->load->view('user');
			echo "Cap nhat thanh cong";
		}
		else{
			$data =  array('email'=>$email, 'facebook'=>$fb, 'phone'=>$phone, 'Update'=>1);
			$this->Mlogin->Update((int)$id_local, $email, $fb, $phone);
		//	$this->load->view('user');
			echo "Cap nhat thanh cong".$update;
		}

		
		

	}
	function sendMail($email)
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'anhminh2305@gmail.com', // change it to yours
			'smtp_pass' => 'Pexiukhin1992', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
			);

		$message = 'Ban vua khoi tao ID tai he thong chung toi';
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
      $this->email->from('anhminh2305@gmail.com'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->subject('Xin Chao');
      $this->email->message($message);
      if($this->email->send())
      {
      	echo 'Email sent.';
      }
      else
      {
      	show_error($this->email->print_debugger());
      }

  }
}