<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_online extends CI_Controller {
	 
	function __construct() {
		parent::__construct();
    } 
	 
	public function index()	{
		if($this->session->userdata('logged_in')) {
			$this->load->view('contact_online');
		}else{
			redirect('index','refresh');
		}
	}

	function verifycontact(){
		$this->form_validation->set_rules('name', 'Name', 'trim|htmlspecialchars|stripslashes|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|htmlspecialchars|stripslashes||required|callback_check_email');
		$this->form_validation->set_rules('message', 'Message', 'trim|htmlspecialchars|stripslashes|required');
		$this->form_validation->set_rules('sum', 'Sum', 'trim|htmlspecialchars|stripslashes|required|callback_check_sum');
		if ($this->form_validation->run() == TRUE){
			redirect('contact_online', 'refresh');
		}
		else{
			$this->load->view('contact');
		}
	}
	
	function check_email(){
		$email = $this->input->post('email');
		if(preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/",$email)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_email', 'Invalid email!');
			return FALSE;
		}
	}

	function check_sum(){
		$email = $this->input->post('sum');
		if($email=='5'){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_sum', 'Wrong sum!');
			return FALSE;
		}
	}		
		
}