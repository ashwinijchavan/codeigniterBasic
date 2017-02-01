<?php
class Channel_model  extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    function save_channel($data){
    	$this->db->insert('channel_detail',$data);
    	$this->db->last_query();
    }
    public function get_info(){
    	$getvalue = $this->db->get('channel_detail');
    	$tt = $getvalue->result();
    			echo "<pre>";
    			print_r($tt);
    			echo "</pre>";
    			
    }
}