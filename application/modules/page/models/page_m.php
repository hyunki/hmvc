<?php 

class Page_m extends MY_Model
{
	
	protected $_table_name = 'pages';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = '';
	protected $_rules = [];
	protected $_created_at = TRUE;
	protected $_modified_at = TRUE;
	protected $_deleted_at = TRUE;


}