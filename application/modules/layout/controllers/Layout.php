
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* End of file Layouts.php */
/* Location: ./application/modules/layouts/controllers/Layouts.php */

/**
* 
*/
class Layout extends MY_Controller
{
	
	function __construct()
	{
		Parent::__construct();
	}

	function basic()
	{
		$data = NULL;
		$this->load->view('basic',$data);
	}


}