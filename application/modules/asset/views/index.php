<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	function dd($data)
	{
		echo "<pre>";
		var_dump($data);
		echo "</pre>";
	}

$this->load->model('asset_m');
$results = $this->asset_m->get('id');

dd($results);

form_open(base_url(), '');

form_label('What is your Name', 'Asset' );

form_input('Asset', 'asset');




form_submit('name', 'value');

/* End of file index.php */
/* Location: ./application/modules/asset/views/index.php */