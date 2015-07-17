<!-- models/tasks.php -->
<!-- table "users": [task_id|user_id|name|description|category|created|deadline|priority] -->
<?php
Class Tasks extends CI_Model {
	
	function getTasks($user_id){
		$this->db->select('task_id, user_id, name, category, created, deadline, priority, completed');
		$this->db->from('tasks');
		$this->db->where('user_id', $user_id);
		
		$query=$this->db->get();
		
		if ($query->num_rows() == 0){
			return FALSE;
		}else{
			return $query->result();
		}
	}
	
	function getTasksGraph($user_id,$date){
		$this->db->select('task_id, user_id, created');
		$this->db->from('tasks');
		$this->db->where('user_id', $user_id);
		$this->db->where('created <=', $date);
		
		$query=$this->db->get();
		
		return $query->num_rows();
	}
	function getTasksGraphDone($user_id,$date){
		$this->db->select('task_id, user_id, created, completed');
		$this->db->from('tasks');
		$this->db->where('user_id', $user_id);
		$this->db->where('completed', 1);
		$this->db->where('created <=', $date);
		
		$query=$this->db->get();
		
		return $query->num_rows();
	}
	function getTasksGraphFail($user_id,$date){
		$this->db->select('task_id, user_id, created, deadline, completed');
		$this->db->from('tasks');
		$this->db->where('user_id', $user_id);
		$this->db->where('completed', 0);
		$this->db->where('deadline <', $date);
		
		$query=$this->db->get();
		
		return $query->num_rows();
	}
	
	function getTasks_main($user_id){
		$this->db->select('task_id, user_id, name, description, category, created, deadline, priority, completed');
		$this->db->from('tasks');
		$this->db->where('user_id', $user_id);
		$this->db->where('completed', 0);
		$this->db->where('deadline >', date('Y-m-d'));
		$this->db->or_where('deadline =', date('Y-m-d'));
		$this->db->order_by("priority", "desc");
		
		$query=$this->db->get();
		
		if ($query->num_rows() == 0){
			return FALSE;
		}
		else{
			return $query->result();
		}
	}

	function getTasks_paging($user_id, $limit, $start) {
		$this->db->select('task_id, user_id, name, category, created, deadline, priority, completed');
		$this->db->from('tasks');
		$this->db->where('user_id', $user_id);
		$this->db->order_by("created", "desc");
        $this->db->limit($limit, $start);
        $query=$this->db->get();
 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return FALSE;
   }
   
	function delete_task($task_id){
		$this->db->where('task_id', $task_id);
	    $this->db->delete('tasks');
	}
	
	function done_task($task_id){
		$this->db->where('task_id', $task_id);
		$this->db->set('completed', 1);
		$this->db->update('tasks'); 
	}
	
	function getTaskById($task_id){
		$this->db->select('task_id, name, description, category, deadline, priority');
		$this->db->from('tasks');
		$this->db->where('task_id', $task_id);
		
		$query=$this->db->get();
		
		return $query->row();
	}
	
	function getTaskByName($match){
		$this->db->select('task_id, name, deadline, priority, completed');
		$this->db->from('tasks');
		$this->db->like('name', $match);
		
		$query=$this->db->get();
		
		return $query;
	}

	function getNumDone($user_id){
		$this->db->select('task_id, user_id, created, completed');
		$this->db->from('tasks');
		$this->db->where('user_id', $user_id);
		$this->db->where('completed', 1);

		$query=$this->db->get();
		
		return $query->num_rows();
	}

	function getNumMissed($user_id, $date){
		$this->db->select('task_id, user_id, created, completed');
		$this->db->from('tasks');
		$this->db->where('user_id', $user_id);
		$this->db->where('completed', 0);
		$this->db->where('deadline <', $date);

		$query=$this->db->get();
		
		return $query->num_rows();
	}

	function getNumPending($user_id, $date){
		$this->db->select('task_id, user_id, created, completed');
		$this->db->from('tasks');
		$this->db->where('user_id', $user_id);
		$this->db->where('completed', 0);
		$this->db->where('deadline >=', $date);

		$query=$this->db->get();
		
		return $query->num_rows();
	}
} 
?>