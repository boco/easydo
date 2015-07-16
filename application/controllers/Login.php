<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users');
    }

	public function index() {
		$this->load->view('login');
	}

	function verifylogin(){
		$this->form_validation->set_rules('email', 'Email', 'trim|htmlspecialchars|stripslashes|callback_check_email|required|callback_check_email_exist');
		$this->form_validation->set_rules('password', 'Password', 'trim|htmlspecialchars|stripslashes|required|callback_check_password');
		if ($this->form_validation->run() == TRUE){
			$email=$this->input->post('email');
			$this->session->set_userdata('email', $email);
			$this->session->set_userdata('logged_in', 1);
			redirect('main', 'refresh');
		}
		else{
			$this->load->view('login');
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
	
	function check_email_exist(){
		$email = $this->input->post('email');
		//query the database
		$result = $this->users->email($email);
		if($result != 0){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_email_exist','Email does not exist!');
			return FALSE;
		}
	}
	
	function check_password(){
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$result = $this->users->check_password($email,$password);
		$result_email = $this->users->email($email);
		if(preg_match("/^[a-zA-Z0-9]{3,20}$/",$password) && $result){
			return TRUE;
		}elseif($result_email == 0){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_password', 'Wrong password!');
			return FALSE;
		}
	}
}
