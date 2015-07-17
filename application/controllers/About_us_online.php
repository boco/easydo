<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us_online extends CI_Controller {
	 
	function __construct() {
		parent::__construct();
		$this->load->model('tasks');
    } 
	 
	public function index() {
		if($this->session->userdata('logged_in')) {
			$this->writeJs();
			$this->load->view('about_us_online');
		}else{
			redirect('index','refresh');
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