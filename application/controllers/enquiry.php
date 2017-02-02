<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Enquiry extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Enquiry_model');
  }
  public function getEnquiry(){
    $this->load->view('enquiryForm');
  }
  public function postEnquiry(){
   	  $data['name']= $this->input->get("name");
      $data['mail']= $this->input->get("mail");
      $data['mobile']= $this->input->get("mobile");
      $data['subject']= $this->input->get("subject");
      $data['message']= $this->input->get("message");
      
      $this->Enquiry_model->saveEnquiry($data);
      
  	 redirect(base_url('enquiry/enquiryList'), 'refresh'); 
  }
   public function enquiryList(){
    	$data['enquiry_list']=$this->Enquiry_model->getEnquiryDetails();


    	$this->load->view('enquiryTable',$data);
   }
}