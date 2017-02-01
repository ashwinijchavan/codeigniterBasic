<?php
class Register_model  extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function save_register($data){
		
		$this->db->insert('registration_detail',$data);
		 $this->db->last_query();
	}
	public function get_info()
	{
		$query = $this->db->get('registration_detail');
		return $query->result();
				
	}
}