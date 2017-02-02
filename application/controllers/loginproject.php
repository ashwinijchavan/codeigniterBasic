<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Loginproject extends CI_Controller {
	public function index(){
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('adminlogin');
	}
	public function admin_login(){
		$this->load->library('form_validation');


		$this->form_validation->set_rules('uname','User Name','required|alpha|trim');
		$this->form_validation->set_rules('pass','Password','required');

		if( $this->form_validation->run()){
			echo "success";
		}
		else{
			echo "fail";
		}
		 
	}
}