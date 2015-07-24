<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mlogin extends CI_Model{

	function CreateNew($u = array())
	{
		$this->db->insert('user', $u);
		return $this->db->insert_id();
	}

	function Update($id, $email, $facebook, $phone)	
	{
		$id = $this->db->escape($id);
		$email = $this->db->escape($email);
		$facebook = $this->db->escape($facebook);
		$phone = $this->db->escape($phone);

	 $data = array(
	 			'id' => $id,
               'email' => $email,
               'facebook' => $facebook,
               'phone' => $phone,
               'update' =>1
            );
	$this->db->where('id', $id);
	$this->db->update('user', $data);
	}
	function Search($id){
		$query = $this->db->query("select * from user where id = $id");
		return $query->result();
	}


}