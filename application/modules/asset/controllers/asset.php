<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Asset extends MY_Controller
{

	
	function __construct()
	{
		PARENT::__construct();
	}

	function index()
	{
		$this->load->view('index');
	}

	function get($order_by) {
		$this->load->model('asset_m');
		$query = $this->asset_m->get($order_by);
		return $query;
	}

	function get_with_limit($limit, $offset, $order_by) {
		$this->load->model('asset_m');
		$query = $this->asset_m->get_with_limit($limit, $offset, $order_by);
		return $query;
	}

	function get_where($id) {
		$this->load->model('asset_m');
		$query = $this->asset_m->get_where($id);
		return $query;
	}

	function get_where_custom($col, $value) {
		$this->load->model('asset_m');
		$query = $this->asset_m->get_where_custom($col, $value);
		return $query;
	}

	function _insert($data) {
		$this->load->model('asset_m');
		$this->asset_m->_insert($data);
	}

	function _update($id, $data) {
		$this->load->model('asset_m');
		$this->asset_m->_update($id, $data);
	}

	function _delete($id) {
		$this->load->model('asset_m');
		$this->asset_m->_delete($id);
	}

	function count_where($column, $value) {
		$this->load->model('asset_m');
		$count = $this->asset_m->count_where($column, $value);
	return $count;
	}

	function get_max() {
		$this->load->model('asset_m');
		$max_id = $this->asset_m->get_max();
	return $max_id;
	}

	function _custom_query($mysql_query) {
		$this->load->model('asset_m');
		$query = $this->asset_m->_custom_query($mysql_query);
	return $query;
	}




}
 
 /* End of file Asset.php */
 /* Location: ./application/modules/asset/controllers/Asset.php */ ?>