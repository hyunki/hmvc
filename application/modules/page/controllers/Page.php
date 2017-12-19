<?php

/**
* This controller will control the main webpage landing.
* And login page if users are not logged in.
*/
class Page extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('page_m');
	}

	public function index()
	{
		$pages = $this->page_m->get();
		var_dump($pages);
	}

}