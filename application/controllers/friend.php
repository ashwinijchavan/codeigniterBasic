<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Friend extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Friend_model');
  }
  public function showFriend(){

   $this->load->view('bestFriend');
 }

 public function postFriend(){
  $fData['name1']=$this->input->get('name1');
  $fData['name2']=$this->input->get('name2');

  $suc=$this->Friend_model->saveFriend($fData);
  if(isset($suc)){
    redirect(base_url('friend/friendList'),'refresh');
  }
}
public function friendList()
{
        $data['list'] = $this->Friend_model->getAllFriend();

 
  $this->load->view('allFriendList', $data);
}
}
