<?php
class User_model extends CI_Model
{
	public function register_user($data)
	{
		$this->db->set('username',$data['username']);
		$this->db->set('name',$data['firstname']);
		$this->db->set('email',$data['email']);
		$this->db->set('password', ($data['password']));
		
		$this->db->insert('users');
	}
	
	public function username_exists($username)
	{
		$this->db->where('username',$username);
		$query=$this->db->get('users');
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
				
	public function login($data)
	{
		$this->db->where('username',$data['username']);
		$this->db->where('password',($data['password']));
		$query=$this->db->get('users');
		
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>