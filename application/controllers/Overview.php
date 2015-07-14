<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

	function __construct() {
		parent::__construct();
    }

	public function index()
	{
		$this->load->view('overview');
	}
}
