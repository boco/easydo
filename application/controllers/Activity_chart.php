<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_chart extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('tasks');
    }

	public function index() {
		$this->writeJs();
		$this->load->view('activity_chart');
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
