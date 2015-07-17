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
		$this->form_validation->set_rules('name', 'Name', 'trim|htmlspecialchars|stripslashes|required|alpha_numeric|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('email', 'Email', 'trim|htmlspecialchars|stripslashes|required|valid_email|callback_check_email_available');
		$this->form_validation->set_rules('password', 'Password', 'trim|htmlspecialchars|stripslashes|required|alpha_numeric');
		$this->form_validation->set_rules('repassword', 'Retype Password', 'trim|htmlspecialchars|stripslashes|required|alpha_numeric|matches[password]');
		if ($this->form_validation->run() == TRUE){
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$registered=date('Y-m-d');
			$settings=5;
			$overview=5;	
			$userdata=array(
				'name'=>$name,
				'email'=>$email,
				'password'=>$password,
				'registered'=>$registered,
				'settings'=>$settings,
				'overview'=>$overview
				);
			$this->db->insert('users', $userdata);
			$this->session->set_userdata('logged_in', 1);
			$this->session->set_userdata('email', $email);
			redirect('main', 'refresh');
		}else{
			$this->load->view('sign_up');
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
	
}
