<!-- models/users.php -->
<!-- table "users": [user_id|name|email|password|birthday|gender|registered|settings] -->
<?php
Class Users extends CI_Model {
	function getAll($user_id){
		$this->db->select('user_id, name, email, registered, settings');
		$this->db->from('users');
		$this->db->where('user_id', $user_id);
		
		$query=$this->db->get();
		return $query->row();
	}
	
	function getRegistered($user_id){
		$this->db->select('user_id, registered');
		$this->db->from('users');
		$this->db->where('user_id', $user_id);
		
		$query=$this->db->get();
		return $query->row()->registered;
	}
	
	function email($email) {
		$this->db->select('user_id, email');
		$this->db->from('users');
		$this->db->where('email', $email);
		
		$query=$this->db->get();
		return $query->num_rows();
    }
	
	function self_email($email,$user_id) {
		$this->db->select('user_id, email');
		$this->db->from('users');
		$this->db->where('email', $email);
		$this->db->where('user_id !=', $user_id);
		
		$query=$this->db->get();
		return $query->num_rows();
    }
	
	function check_password($email,$password){
		$this->db->select('user_id, email, password');
		$this->db->from('users');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		
		$query=$this->db->get();
		return $query->num_rows();
	}
	
	function get_password($user_id) {
		$this->db->select('user_id, password');
		$this->db->from('users');
		$this->db->where('user_id', $user_id);
		
		$query=$this->db->get();
		return $query->row()->password;
    }
	
	function get_attributes($email){
		$this->db->select('user_id, name, email');
		$this->db->from('users');
		$this->db->where('email', $email);
		
		$query=$this->db->get();
		return $query->row();
	}
} 
?>