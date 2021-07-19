<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminMain extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->CI =& get_instance();
	}

	public function index()
	{
		$this->CI->load->view('admin/index', '');
	}

}
