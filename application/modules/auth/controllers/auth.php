<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}
	
	function index()
	{
		$this->load->view('login_form');
	}
	
	function validate_credentials()
	{		
		$query = $this->users_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'email_address' => $this->input->post('email_address'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect(base_url());
		}
		else // incorrect username or password
		{
			$this->index();
		}
	}	
	
	function signup()
	{
		$data['main_content'] = 'signup_form';
		$this->load->view('/includes/template', $data);
	}
	
	function create_user()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[255]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('signup_form');
		}
		
		else
		{			
			$this->load->model('users_model');
			var_dump($_POST);
			if($query = $this->users_model->create_user())
			{
				$data['main_content'] = 'signup_successful';
				$this->load->view('includes/template', $data);
			}
			else
			{
				$this->load->view('signup_form');			
			}
		}
		
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

	function members_area()
	{
		$this->load->view('logged_in_area');
	}
	
	function another_page() // just for sample
	{
		echo 'good. you\'re logged in.';
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="'.base_url().'/auth">Login</a>';	
			die();		
			//$this->load->view('login_form');
		}		
	}	


}

/* End of file auth.php */
/* Location: ./application/modules/auth/controllers/auth.php */