<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Channel extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Channel_model');
  }
  public function getChannel(){
  	$this->load->view('channelForm');
  }
  public function postChannel(){

  	  $data['name']= $this->input->get("name");
      $data['mobile']= $this->input->get("mobile");
      $data['email']= $this->input->get("email");
      $data['pan']= $this->input->get("pan");
      $data['selectreg']= $this->input->get("selectreg");

      $this->Channel_model->save_channel($data);

  	$this->load->view('channelTable');
  }

}