<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users');
    }

	public function index() {
		$this->load->view('sign_up');
	}

	function verifysignup (){
		//$this->db_select = $this->load->database();
		$this->form_validation->set_rules('name', 'Name', 'trim|htmlspecialchars|stripslashes|callback_check_name');
		$this->form_validation->set_rules('email', 'Email', 'trim|htmlspecialchars|stripslashes|callback_check_email|callback_check_email_available');
		$this->form_validation->set_rules('password', 'Password', 'trim|htmlspecialchars|stripslashes|callback_check_password');
		$this->form_validation->set_rules('repassword', 'Re-Password', 'trim|htmlspecialchars|stripslashes|callback_check_repassword');
		if ($this->form_validation->run() == TRUE){
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$registered=date('Y-m-d');
			$settings=5;	
			$userdata=array(
				'name'=>$name,
				'email'=>$email,
				'password'=>$password,
				'registered'=>$registered,
				'settings'=>$settings
				);
			$this->db->insert('users', $userdata);
			$this->session->set_userdata('logged_in', 1);
			$this->session->set_userdata('email', $email);
			redirect('main', 'refresh');
		}
		else{
			$this->load->view('sign_up');
		}
	}

	function check_name(){
		$name = $this->input->post('name');
		if(preg_match("/^[a-zA-Z0-9_\s]{4,20}$/",$name)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_name', 'Invalid name!');
			return FALSE;
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
	
	function check_email_available(){
		$email = $this->input->post('email');
		//query the database
		$result = $this->users->email($email);
		if($result == 0){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_email_available','Email already registered!');
			return FALSE;
		}
	}
	
	function check_password(){
		$password = $this->input->post('password');
		if(preg_match("/^[a-zA-Z0-9]{3,20}$/",$password)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_password', 'Invalid password!');
			return FALSE;
		}
	}
	
	function check_repassword(){
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');
		if(preg_match("/^[a-zA-Z0-9]{3,20}$/",$repassword) || $password==$repassword){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_repassword', 'Passwords do not match!');
			return FALSE;
		}
	}
}
