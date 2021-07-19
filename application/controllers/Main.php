<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->CI =& get_instance();
	}

	public function index()
	{
		$data = array();
		$this->CI->load->view('front/main', $data);
	}

}
