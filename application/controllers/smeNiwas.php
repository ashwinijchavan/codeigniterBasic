<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class SmeNiwas extends CI_controller{
	public function study(){
		$tt= "i am studying";
		$studynow['abc'] =$tt;

		$this->load->view('welcome_message',$studynow);


	}
}