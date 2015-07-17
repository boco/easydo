<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('tasks');
    }

	public function index() {
		if($this->session->userdata('logged_in')) {
			$this->load->library('pagination');

			$config=array();
			$config['base_url']=base_url().'index.php/overview/index';
			$config['total_rows']=$this->db->get_where('tasks', array('user_id' => $this->session->userdata('user_id')))->num_rows();
			$config['per_page']=5;
			$config['uri_segment']=3;
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Prev';
			$config['full_tag_open'] = '<p class="light-theme">';
			$config['full_tag_close'] = '</p>';
			$config['cur_tag_open'] = '<span class="light-theme current">';
			$config['cur_tag_close'] = '</span>';
			
			$this->pagination->initialize($config);
			
			$page=($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['tasks']=$this->tasks->getTasks_paging($this->session->userdata('user_id'),$config['per_page'], $page);
			
			$this->writeJs();
			$this->load->view('overview',$data);
		}else{
			redirect('index','refresh');
		}
	}

	function delete(){
		$task_id = $this->input->post('delete_task');
		$this->tasks->delete_task($task_id);
	    redirect('overview','refresh');
	}
	
	function done(){
		$task_id = $this->input->post('done_task');
		$this->tasks->done_task($task_id);
	    redirect('overview','refresh');
	}
	
	/* TO-DO */
	function edit(){
		$task_id = $this->input->post('edit_task');
		$data['edit_task']=$this->tasks->getTaskById($task_id);
		$this->load->view('edit_task',$data);
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
