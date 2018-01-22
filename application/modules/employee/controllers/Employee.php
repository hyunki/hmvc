<?php
/**
* 
*/
class Employee extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('employee_m');
	}

	function index()
	{
		$this->load->model('employee_m');
		$data['module'] = 'employee';
		$data['view'] = 'index';
		echo Modules::run('template/admin', $data);
	}

	function create()
	{
		$data['module'] = 'employee';
		$data['view'] = 'create';
		echo Modules::run('template/admin', $data);
		

	}

	function saveform()
	{
		var_dump($this->input->post());
	}

	

}