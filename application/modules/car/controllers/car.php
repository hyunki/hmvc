<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Car extends MY_Controller
{
	
	function __construct()
	{
		PARENT::__construct();
		$this->load->model('Car_m');
	}

	function index()
	{
		$data['cars'] = $this->Car_m->get('');
		$data['post'] = $this->get_data_from_post();
		
		$data['module'] = 'car';
		$data['view_file'] = 'index';
		echo Modules::run('template/admin', $data);
	}


	function get($id)
	{
		$this->load->model('car');
		$data['id'] = $this->car->get($id);
		$data['module'] = 'car';
		$data['view_file'] = 'get';
		echo Modules::run('template/admin', $data);
	}

	function get_data_from_post()
	{
		if (!is_null($_POST)) 
		{
			$data['post'] = 
			[
				'plate' => $this->input->post('plate'),
				'ownership' => $this->input->post('ownership'),
				'name' => $this->input->post('name'),
				'employee' => $this->input->post('employee'),
				'acquired_at' => $this->input->post('acquired_at') ,
				'sold_at' => $this->input->post('sold_at'),
			];
			return $data;
		}

	}

	function submit()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('plate', '번호판', 'trim|required|min_length[9]');

		if ($this->form_validation->run() == FALSE)
		{
			echo validation_errors();
		}else
		{
			redirect('car/index');
		}

		
	}






}
 
 /* End of file Asset.php */
 /* Location: ./application/modules/asset/controllers/Asset.php */ ?>