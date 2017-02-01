<?php
class Profile_model  extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_info()
	{
		$query = $this->db->get('student_info');
		return $query->result();
	}
	public function save_info($data)
	{
		$suc=$this->db->insert('student_info', $data);
		if(isset($suc)){
			return true;
		}else{
			return false;
		}
	}
}
?>
