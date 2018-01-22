<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

/**
* 
*/

class MY_Controller extends MX_Controller
{
	public $data = [
	'title'		=> 'HMVC',
	'header'	=> [],
	'content'	=> 'Content',
	'posts'		=> [],
	'footer'	=> 'footer'
	];
	
	function __construct()
	{
		parent::__construct();
	}


}