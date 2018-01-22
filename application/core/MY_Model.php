<?php
/**
* Basic CRUD
*/
class MY_Model extends CI_Model
{
	
	protected $_table_name = '';
	protected $_primary_key = '';
	protected $_primary_filter = 'intval';
	protected $_order_by = '';
	protected $_rules = [];
	protected $_created_at = TRUE;
	protected $_modified_at = TRUE;
	protected $_deleted_at = TRUE;


	function __construct()
	{
		parent::__construct();
	}

	public function get($id = NULL, $single = FALSE)
	{

		if ($id != NULL) 
		{
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		else
		{
			$method = 'result';
		}

		if (!count($this->db->order_by($this->_order_by)))
		{
			$this->db->order_by($this->_order_by);
		}

		return $this->db->get($this->_table_name)->$method();


	}

	public function get_by($where, $single = FALSE)
	{
		$this->db->where($where);

		return $this->get(NULL, $single);
	}

	public function save($value='')
	{
		if ($this->_timestamps == TRUE) 
		{
			$now = date('Y-m-d H:i:s');
			$id || $data['created_at'] = $now;
			$data['modified_at'] = $now;
		}

		// Insert
		if ($id === NULL)
		{
			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->insert($data);
			$id = $this->db->insert_id();
		}

		// Update
		else
		{
			$filter = $this->_primary_filter;
			$id = $filter($data[$this->_primary_key]);
			$this->db->set($data);
			$this->db->wehre($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}

		return $id;
	}

	public function softdelete($value='')
	{
		# code...
	}

}