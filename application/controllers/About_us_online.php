<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us_online extends CI_Controller {
	 
	function __construct() {
		parent::__construct();
    } 
	 
	public function index()
	{
		if($this->session->userdata('logged_in')) {
			$this->load->view('about_us_online');
		}else{
			redirect('index','refresh');
		}
	}
	
}