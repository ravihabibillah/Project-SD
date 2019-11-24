<?php

/**
 * 
 */
class Login_model extends CI_Model
{
	
	function getAllAdmin() 
	{

		return $this->db->get('data_admin')->result_array();

	}
	function verification()
	{

		$data = [
			"username" => $this->input->post('username',true),
			"password" => $this->input->post('password',true),
		];
		return $this->db->get_where('data_admin', 
			[
				'username'=> $data['username'], 
				'password' => $data['password']
			]
		)->row_array();
	}
}