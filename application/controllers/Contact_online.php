<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_online extends CI_Controller {
	 
	function __construct() {
		parent::__construct();
    } 
	 
	public function index()	{
		if($this->session->userdata('logged_in')) {
			$this->load->view('contact_online');
		}else{
			redirect('index','refresh');
		}
	}

	function verifycontact(){
		$this->form_validation->set_rules('name', 'Name', 'trim|htmlspecialchars|stripslashes|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('email', 'Email', 'trim|htmlspecialchars|stripslashes|required|valid_emaill');
		$this->form_validation->set_rules('message', 'Message', 'trim|htmlspecialchars|stripslashes|required');
		$this->form_validation->set_rules('sum', 'Sum', 'trim|htmlspecialchars|stripslashes|required|numeric|callback_check_sum');
		if ($this->form_validation->run() == TRUE) {
			//get the form data
	        $name = $this->input->post('name');
	        $from_email = $this->input->post('email');
	        $message = $this->input->post('message');
        	$sum = $this->input->post('sum');

	        //set to_email id to which you want to receive mails
	        $to_email = 'boco_13@hotmail.com';                      

	        //send mail
	        $this->email->from($from_email, $name);
			$this->email->to($to_email);
			$this->email->subject('EasyDo ask');
			$this->email->message($message);

	        if ($this->email->send()) {
	            // mail sent
	            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
	            //redirect('contactform/index');
	            redirect('contact_offline');
	        } else {
	            //error
	            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error occurred when sending email! Please try again later</div>');
	            redirect('contact_online');
	        }
		} else {
			$this->load->view('contact_online');
		}
	}

	function check_sum(){
		$email = $this->input->post('sum');
		if($email=='5'){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_sum', 'Wrong sum!');
			return FALSE;
		}
	}		
		
}