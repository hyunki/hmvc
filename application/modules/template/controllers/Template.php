<?php

/**
* This controller will control the main webpage landing.
* And login page if users are not logged in.
*/
class Template extends MY_Controller
{
	
	function basic_template($data)
	{
		$this->load->view('basic_header');
		$this->load->view('basic_template',$data);

	}


}