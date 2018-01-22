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
		$this->load->view('index');
	}

	function create()
	{

		$this->load->view('create');

	}

	function saveform()
	{
		var_dump($this->input->post());
	}

	

}