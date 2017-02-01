<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Student extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
			#$this->load->helper('url');
		$this->load->model('Profile_model');
	}


	public function studentList()
	{
		$data['tt']='sasas';
		$data['list'] = $this->Profile_model->get_info();
				 
					
		$this->load->view('studentTable', $data);
	}

	public function postStudent(){


		$data['firstname']= $this->input->get('fName');
		$data['lastname']= $this->input->get('lName');
		$data['gender']= $this->input->get('genderName');
		$data['qualification']= $this->input->get('qualificationName');
		$data['proffession']= $this->input->get('selectOptionName');
		$data['status']= $this->input->get('singleName');
		$data['phone_number']= $this->input->get('mobile');
		$res = $this->Profile_model->save_info($data);
		if($res==true){
			echo  $data['msg']="REcord Added sucessfully";
		}

		redirect('null','refresh');

	}


}
