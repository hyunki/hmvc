<?php
<<<<<<< HEAD
defined('BASEPATH') OR exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH."third_party/MX/Controller.php";
=======
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";
>>>>>>> 29c5769424dc925c7a2c9b60907432bf6e7824e0

/**
* 
*/

class MY_Controller extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
<<<<<<< HEAD
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
=======
		$this->load->module('layout');
	}




}
>>>>>>> 29c5769424dc925c7a2c9b60907432bf6e7824e0
