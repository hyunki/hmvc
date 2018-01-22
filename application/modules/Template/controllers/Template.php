
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller
{
	
	function __construct()
	{
		Parent::__construct();
	}

	function visitor($data)
	{
		$this->load->view('visitor', $data);
	}

	function basic($data)
	{
		$this->view_module_check();
		$this->load->view('basic', $data);
	}

	function admin($data)
	{
		$this->load->view('admin', $data);
	}

	function login($data)
	{
		$this->load->view('login_form', $data);
	}

	function signup()
	{
		$this->load->view('signup_form');
	}


	function view_module_check()
	{
		if (!isset($data['view_module']))
		{
			$data['view_module'] = $this->uri->segment(1);
		}
	}

}


/* End of file Layouts.php */
/* Location: ./application/modules/layouts/controllers/Layouts.php */