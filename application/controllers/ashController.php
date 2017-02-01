<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AshController extends CI_Controller {
 
	public function index()
	{
		//$this->load->view('welcome_message');
		echo "ash";
	}

	public function cool($value='')
	{
		$arrayName['sweet']='i love coding it will make mi think';
		$arrayName['uderstood']='pl inderstood me ';
		$arrayName['future']="Here is ypur long lasting future make u happy till you grow old";
		$arrayName['babu'] = array('love' =>'aashwini ' , 'pillu'=>'ashwini i am sorry');
		$this->load->view('myAsh',$arrayName);

	}
}
