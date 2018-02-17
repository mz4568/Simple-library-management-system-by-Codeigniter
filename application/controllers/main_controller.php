<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main_controller extends CI_Controller {
       public function __construct() {
        parent::__construct();
        $this->load->model('main_model');
       }
     public function main_page()
     {
     $email=$this->input->post('email',true);
     $password=md5($this->input->post('password',true));
     $result=$this->main_model->main_data($email,$password);
     if($result){
       $data=array();
       $data['message']='Wellcome to the EU Library';
       $this->session->set_userdata($data);
       redirect('eu_controller','refresh');
      }else{
        $data['message']='Please enter valid email/password';
        $this->session->set_userdata($data);
        redirect('login_controller/index');
         }

     }
      
}