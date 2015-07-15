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
			$data['done']=$done;
			$data['pending']=$pending;
			$data['failed']=$failed;
			
			$this->load->view('my_profile',$data);
		}else{
			redirect('index','refresh');
		}
	}

	
}
