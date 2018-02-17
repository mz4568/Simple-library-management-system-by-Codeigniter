<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class super_admin_controller extends CI_Controller  {
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index () {
        $this->load->view('super_admin/login');
    }
     public function home_super_admin () {
        $data=array();
        $data['user_info']=$this->admin_model->user_info_data();
        $data['product_info']=$this->admin_model->product_info_data();
        $this->load->view('super_admin/super_admin_home',$data);
    }
    public function edit_info($regi_id)
    {
       $data=array();
       $data['edit_info']=$this->admin_model->edit_info_data($regi_id);
       $this->load->view('super_admin/edit_information',$data); 
        
    }
    public function update_information()
    {
         $data =array();
            $data['regi_id']=$this->input->post('regi_id',true);
            $data['first_name']=$this->input->post('first_name',true);
            $data['middle_name']=$this->input->post('middle_name',true);
            $data['last_name']=$this->input->post('last_name',true);
            $data['email']=$this->input->post('email',true);
            $data['status']=$this->input->post('status',true);
            $this->admin_model->update_info($data);
           
          $sdata=array();
          $sdata['message']="Data information Successfully updated";
          $this->session->set_userdata($sdata);
          redirect('super_admin_controller/home_super_admin');
            
    }
    
    public function Delete_info($product_id)
    {
        $this->admin_model->delete_information($product_id);
        redirect('super_admin_controller/home_super_admin');
    }
}
