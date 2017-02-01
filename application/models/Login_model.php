<?php
class Login_model  extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function save_login($data){
		
		$this->db->insert('users',$data);
		 $this->db->last_query();
	}
	function getLoginDetails(){
		$userData =$this->db->get('users');
		return $userData->result();

	}
}
?>
