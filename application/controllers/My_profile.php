<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_profile extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users');
		$this->load->model('tasks');
    }

	public function index() {
		if($this->session->userdata('logged_in')) {
			$attributes=$this->users->getAll($this->session->userdata('user_id'));
			$data['name']=$attributes->name;
			$data['email']=$attributes->email;
			$data['settings']=$attributes->settings;
			
			$done=0;
			$pending=0;
			$failed=0;
			
			$tasks=$this->tasks->getTasks($this->session->userdata('user_id'));
			if($tasks){
				foreach($tasks as $row) {
					if($row->completed == 1){
						$done=$done+1;
					}elseif(strtotime(date('Y-m-d')) > strtotime($row->deadline) && $row->completed == 0){
						$failed=$failed+1;
					}else{
						$pending=$pending+1;
					}
				}
			}	
			//$data['done']=$done;
			//$data['pending']=$pending;
			//$data['failed']=$failed;
			$data['done']=$this->tasks->getNumDone($this->session->userdata('user_id'));
			$data['pending']=$this->tasks->getNumPending($this->session->userdata('user_id'), date('Y-m-d'));
			$data['failed']=$this->tasks->getNumMissed($this->session->userdata('user_id'), date('Y-m-d'));
			
			$this->load->view('my_profile',$data);
		}else{
			redirect('index','refresh');
		}
	}

	function save(){	
		$this->form_validation->set_rules('userName', 'Name', 'trim|htmlspecialchars|stripslashes|required|alpha_numeric');
		$this->form_validation->set_rules('userEmail', 'Email', 'trim|htmlspecialchars|stripslashes|required|valid_email');
		$this->form_validation->set_rules('userPassword', 'Password', 'alpha_numeric');	
		$this->form_validation->set_rules('userPasswordRepeat', 'Repeat password', 'matches[userPassword]');		
		if ($this->form_validation->run() == TRUE){
			$user_id=$this->session->userdata('user_id');
			$name=$this->input->post('userName');
			$email=$this->input->post('userEmail');
			$password=$this->input->post('userPassword');
			$repassword=$this->input->post('userPasswordRepeat');

			if(strlen($password) > 0 && strcmp($password, $repassword) == 0){
				$userdata=array(
					'name'=>$name,
					'email'=>$email,
					'password'=>$password,
				);
			}else{
				$userdata=array(
					'name'=>$name,
					'email'=>$email,
				);
			}
				
			$this->db->where('user_id', $user_id);
			$this->db->update('users', $userdata);
			redirect('my_profile');
		}
		else{
			$attributes=$this->users->getAll($this->session->userdata('user_id'));
			$data['name']=$attributes->name;
			$data['email']=$attributes->email;
			$data['done']=$this->tasks->getNumDone($this->session->userdata('user_id'));
			$data['pending']=$this->tasks->getNumPending($this->session->userdata('user_id'), date('Y-m-d'));
			$data['failed']=$this->tasks->getNumMissed($this->session->userdata('user_id'), date('Y-m-d'));
			
			$this->load->view('my_profile', $data);
		}
	}

	function settings(){	
		$this->form_validation->set_rules('userSettings', 'Settings', 'greater_than_equal_to[0]|less_than_equal_to[5]');		
		if ($this->form_validation->run() == TRUE){
			$user_id=$this->session->userdata('user_id');
			$settings=$this->input->post('userSettings');

			$userdata=array(
				'settings'=>$settings,
			);

				
			$this->db->where('user_id', $user_id);
			$this->db->update('users', $userdata);
			redirect('my_profile');
		}
		else{
			$attributes=$this->users->getAll($this->session->userdata('user_id'));
			$data['settings']=$attributes->settings;
			$data['done']=$this->tasks->getNumDone($this->session->userdata('user_id'));
			$data['pending']=$this->tasks->getNumPending($this->session->userdata('user_id'), date('Y-m-d'));
			$data['failed']=$this->tasks->getNumMissed($this->session->userdata('user_id'), date('Y-m-d'));
			
			$this->load->view('my_profile', $data);
		}
	}

	
}
