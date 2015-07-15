<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users');
    }

	function verifyaddtask() {
		$this->form_validation->set_rules('taskName', 'Task Name', 'trim|htmlspecialchars|stripslashes|required|callback_check_name');
		$this->form_validation->set_rules('taskDescription', 'Description', 'trim|htmlspecialchars|stripslashes|required');
		$this->form_validation->set_rules('taskCategory', 'Category', 'trim|htmlspecialchars|stripslashes|required');
		$this->form_validation->set_rules('taskDeadline', 'Deadline', 'trim|htmlspecialchars|stripslashes|required|callback_check_deadline');
		$this->form_validation->set_rules('taskPriority', 'Priority', 'trim|htmlspecialchars|stripslashes|required|callback_check_priority');
		if ($this->form_validation->run() == TRUE){
			$user_id=$this->session->userdata('user_id');
			$task_name=$this->input->post('task_name');
			$description=$this->input->post('description');
			$category=$this->input->post('category');
			$created=date('Y-m-d');
			$deadline=$this->input->post('deadline');
			$priority=$this->input->post('priority');
			$completed=0;
				
			$userdata=array(
				'user_id'=>$user_id,
				'name'=>$task_name,
				'description'=>$description,
				'category'=>$category,
				'created'=>$created,
				'deadline'=>$deadline,
				'priority'=>$priority,
				'completed'=>$completed
				);
			$this->db->insert('tasks', $userdata);
		}
	}

	function check_name(){
		$name = $this->input->post('task_name');
		if(preg_match("/^[a-zA-Z0-9_\s]{4,40}$/",$name)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_name', 'Invalid name!');
			return FALSE;
		}
	}
	
	function check_deadline(){
		$deadline = $this->input->post('deadline');
		if(preg_match("/^[0-9]{4}[-][0-9]?[0-9][-][0-9]?[0-9]$/",$deadline)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_deadline', 'Invalid date!');
			return FALSE;
		}
	}
	
	function check_priority(){
		$priority = $this->input->post('priority');
		if(preg_match("/^[1-5]$/",$priority)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_priority', 'Invalid number!');
			return FALSE;
		}
	}

}
