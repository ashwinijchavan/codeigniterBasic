<?php
class Friend_model  extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
      function saveFriend($data)
    {
           return $this->db->insert('friend',$data);

    } 
    function getAllFriend()
    {
         $all= $this->db->get('friend');
               
                 
     return $all->result();
        
    }
    
}