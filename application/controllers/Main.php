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
			//$data['graf']=$this->graf();
			$this->load->view('main',$data);
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
					echo '<label>'.$row->name.': '.$row->priority.'</label>';
					if($row->completed == 1){
						echo ' - <span style="color:green; font-weight:bold;">DONE</span>';
					}elseif(strtotime(date('Y-m-d')) > strtotime($row->deadline) && $row->completed == 0){
						echo ' - <span style="color:red; font-weight:bold;">FAILED</span>';
					}else{
						echo ' - <span style="color:#FFCC00; font-weight:bold;">PENDING</span>';
					}
					echo '<br/>';
				}
			}
		}else {
			echo "<label>No result found !</label>";
		}
	}

}