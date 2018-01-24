<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class e404Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('errors/cli/404_view');
	}
}
