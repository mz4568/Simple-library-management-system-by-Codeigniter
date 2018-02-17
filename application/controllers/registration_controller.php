<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class registration_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('registration_model');
    }
    public function registration_information()
       {
            $data =array();
            $data['first_name']=$this->input->post('first_name',true);
            $data['middle_name']=$this->input->post('middle_name',true);
            $data['last_name']=$this->input->post('last_name',true);
            $data['address']=$this->input->post('address',true);
            $data['email']=$this->input->post('email',true);
            $data['password']=md5($this->input->post('password',true));
            $data['type']=$this->input->post('type',true);
            $data['status']=$this->input->post('status',true);
            $this->registration_model->mz_registration_information($data);
           
          $sdata=array();
          $sdata['message']="Data registration Successfully Completed";
          $this->session->set_userdata($sdata);
          redirect('homeController/registration');
            
       }
}