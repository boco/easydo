<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_task extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users');
    }

    public function index() {
		if($this->session->userdata('logged_in')) {
			$this->load->view('edit_task');
		}else{
			redirect('index','refresh');
		}
	}

	function verifyedittask() {
		$this->form_validation->set_rules('edit_name', 'Task Name', 'trim|htmlspecialchars|stripslashes|required|callback_check_name');
		$this->form_validation->set_rules('edit_description', 'Description', 'trim|htmlspecialchars|stripslashes|required');
		$this->form_validation->set_rules('edit_category', 'Category', 'trim|htmlspecialchars|stripslashes|required');
		$this->form_validation->set_rules('edit_deadline', 'Deadline', 'trim|htmlspecialchars|stripslashes|required|callback_check_deadline');
		$this->form_validation->set_rules('edit_priority', 'Priority', 'trim|htmlspecialchars|stripslashes|required|callback_check_priority');
		if ($this->form_validation->run() == TRUE){
			$task_id=$this->input->post('edit_task_id');
			$task_name=$this->input->post('edit_name');
			$description=$this->input->post('edit_description');
			$category=$this->input->post('edit_category');
			$deadline=$this->input->post('edit_deadline');
			$priority=$this->input->post('edit_priority');
				
			$userdata=array(
				'name'=>$task_name,
				'description'=>$description,
				'category'=>$category,
				'deadline'=>$deadline,
				'priority'=>$priority,
				);
				
			$this->db->where('task_id', $task_id);
			$this->db->update('tasks', $userdata);
			$this->session->set_flashdata('task_edit','<div class="alert alert-success text-center" alert-block fade in" id="successAlert"><button type="button" class="close" data-dismiss="alert">&times;</button>Your task has been added successfully!</div>');
			redirect('overview');
		}
		else{
			$this->session->set_flashdata('task_edit','<div class="alert alert-danger text-center" alert-block fade in" id="successAlert"><button type="button" class="close" data-dismiss="alert">&times;</button>An error occurred when adding task! Please try again later</div>');
			$this->load->view('edit_task');
		}
	
	}

	function check_name(){
		$name = $this->input->post('edit_name');
		if(preg_match("/^[a-zA-Z0-9_\s]{4,40}$/",$name)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_name', 'Invalid name!');
			return FALSE;
		}
	}
	
	function check_deadline(){
		$deadline = $this->input->post('edit_deadline');
		if(preg_match("/^[0-9]{4}[-][0-9]?[0-9][-][0-9]?[0-9]$/",$deadline)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_deadline', 'Invalid date!');
			return FALSE;
		}
	}
	
	function check_priority(){
		$priority = $this->input->post('edit_priority');
		if(preg_match("/^[1-5]$/",$priority)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_priority', 'Invalid number!');
			return FALSE;
		}
	}

}
