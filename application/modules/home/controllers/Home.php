<?php

/**
* This controller will control the main webpage landing.
* And login page if users are not logged in.
*/
class Home extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('home');
	}
}