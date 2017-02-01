<?php

class StudentFormModels extends CI_Model {

	function __construct()

	{

		parent::__construct();

		$this->load->database();

	}

	public function get_all_student_info()

	{

		$query = $this->db->get('student_info');

		return $query->result();

	}
     
    public function insert_users_to_db($data)

	{

		return $this->db->insert('StudentFormControllers', $data);

	}


}

?>
