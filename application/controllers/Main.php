<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users');
		$this->load->model('tasks');
    }

	public function index() {
		if($this->session->userdata('logged_in')) {
			$user_id=$this->users->get_attributes($this->session->userdata('email'))->user_id;
			$name=$this->users->get_attributes($this->session->userdata('email'))->name;
			$this->session->set_userdata('user_id', $user_id);
			$this->session->set_userdata('name', $name);
			$data['tasks']=$this->tasks->getTasks_main($this->session->userdata('user_id'));
			$data['settings']=$this->users->getAll($this->session->userdata('user_id'))->settings;
			$data['name']=$this->session->userdata('name');

			$this->writeJs();

			//$data['graf']=$this->graf();
			$this->load->view('main', $data);
		}else{
			redirect('index','refresh');
		}
	}

	function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('index', 'refresh');
	}

	/* *EDIT NA VIEW-ju */
	function proces(){		
		$search = trim($this->input->post('searchbar'));
		$query = $this->tasks->getTaskByName($search);
		$count = $query->num_rows();
		  
		if($count > 0) {
			foreach($query->result() as $row){
				if($row->user_id == $this->session->userdata('user_id')){
					echo '<li>'.$row->name.': '.$row->priority.'</li>';
					if($row->completed == 1){
						echo ' - <span class="label label-success">Done</span>';
					}elseif(strtotime(date('Y-m-d')) > strtotime($row->deadline) && $row->completed == 0){
						echo ' - <span class="label label-danger">Missed</span>';
					}else{
						echo ' - <span class="label label-warning">Pending</span>';
					}
					echo '<br/>';
				}
			}
		}else {
			echo "<li>No result found !</li>";
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