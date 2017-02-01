<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Login_model');
	}
    public function getLogin(){
    	$this->load->view('loginform');
    }
    public function postLogin(){
    	$data['username']= $this->input->get("name");
    	$data['password']= $this->input->get("pass");
        $this->Login_model->save_login($data);
     
      redirect(base_url('login/userList'), 'refresh'); 
    }
    public function userList(){
    	$data['user_list']=$this->Login_model->getLoginDetails();


    	$this->load->view('loginList',$data);
   }
}