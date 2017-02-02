<?php
class Enquiry_model  extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function saveEnquiry($data){
		$this->db->insert('enquiry_info',$data);
	}
	function getEnquiryDetails(){
		$userData =$this->db->get('enquiry_info');
		return $userData->result();
			
				
	}
}