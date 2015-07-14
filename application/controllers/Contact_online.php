<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_online extends CI_Controller {
	 
	function __construct() {
		parent::__construct();
    } 
	 
	public function index()
	{
		$this->load->view('contact_online');
	}
}