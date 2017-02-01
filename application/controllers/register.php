<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Register_model');
  }
  public function getRegister(){
    $this->load->view('registerForm');
  }
  
   public function postRegister(){
      $data['name']= $this->input->get("name");
      $data['pan']= $this->input->get("pan");
      $data['mobile']= $this->input->get("mobile");
      $data['businessType']= $this->input->get("trading");
      $data['entity']= $this->input->get("entity");
      $data['email']= $this->input->get("email");
      $data['owner']= $this->input->get("owner");
      $data['address']= $this->input->get("address");

      $this->Register_model->save_register($data);
      redirect(base_url('register/registerList'), 'refresh'); 
   }
   public function registerList()
  {
   
    $data['list'] = $this->Register_model->get_info();
            
    $this->load->view('registerTable', $data);
  
}
}