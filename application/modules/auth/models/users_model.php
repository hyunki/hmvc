<?php

class users_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
		$key = $this->encryption->create_key(16);
	}

	function validate()
	{
		$this->db->where('email_address', $this->input->post('email_address'));
		$this->db->where('password', AES256($this->input->post('password')));
		$query = $this->db->get('users');
		
		if($query->num_rows == 1)
		{
			return true;
		}
		
	}
	
	function create_user()
	{
		
		$new_member_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'authority' => NULL,
			'email_address' => $this->input->post('email_address'),			
			'password' => AES256($this->input->post('password')),
			'active' => '0',
			'created_at' => now(),
		);
		
		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
	}
}