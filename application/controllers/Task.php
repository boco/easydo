<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users');
		$this->load->model('tasks');
    }

    public function index() {
    	$this->writeJs();
		$this->load->view('task');
	}

	function verifyaddtask() {
		$this->form_validation->set_rules('taskName', 'Task Name', 'trim|htmlspecialchars|stripslashes|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('taskDescription', 'Description', 'trim|htmlspecialchars|stripslashes|required');
		$this->form_validation->set_rules('taskCategory', 'Category', 'trim|htmlspecialchars|stripslashes|required|alpha_numeric');
		$this->form_validation->set_rules('taskDeadline', 'Deadline', 'trim|htmlspecialchars|stripslashes|required');
		$this->form_validation->set_rules('taskPriority', 'Priority', 'trim|htmlspecialchars|stripslashes|required|numeric|greater_than_equal_to[0]|less_than_equal_to[5]');
		if ($this->form_validation->run() == TRUE){
			$user_id=$this->session->userdata('user_id');
			$task_name=$this->input->post('taskName');
			$description=$this->input->post('taskDescription');
			$category=$this->input->post('taskCategory');
			$created=date('Y-m-d');
			$deadline = date("Y-m-d", strtotime($this->input->post('taskDeadline')));
			$priority=$this->input->post('taskPriority');
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
            $this->session->set_flashdata('task_added','<div class="alert alert-success text-center" alert-block fade in" id="successAlert"><button type="button" class="close" data-dismiss="alert">&times;</button>Your task has been added successfully!</div>');
            redirect('overview');
        } else {
            //error
            $this->session->set_flashdata('task_added','<div class="alert alert-danger text-center" alert-block fade in" id="successAlert"><button type="button" class="close" data-dismiss="alert">&times;</button>An error occurred when adding task! Please try again later</div>');
            $this->load->view('task');
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

	function writeJs(){
		$sql=$this->tasks->getTasks($this->session->userdata('user_id'));
		$posts = array();
		$results=array();
		foreach($sql as $rowo){
			$taskname=$rowo->name;
			$taskdeadline=$rowo->deadline;
			$taskcompleted=$rowo->completed;

			$posts[] = array('name'=> $taskname, 'deadline'=> $taskdeadline, 'completed'=> $taskcompleted);
		}

		$results['pages']=$posts;

		$fp = fopen('results.json', 'w');
		fwrite($fp, json_encode($results));
		fclose($fp);	
	}

}
