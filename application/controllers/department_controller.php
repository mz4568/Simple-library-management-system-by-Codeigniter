<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class department_controller  extends CI_Controller {
       public function __construct() {
        parent::__construct();
        $this->load->model('department_model');
       }
       public function add_department()
       {
        $this->load->view('eu/addDepartment');   
       }
       public function insert_dep_information()
       {
           $data =array();
            $data['department_name']=$this->input->post('department_name',true);
            $this->department_model->insert_dep_information($data);
           
          $sdata=array();
          $sdata['message']="Department inserted Successful";
          $this->session->set_userdata($sdata);
          redirect('department_controller/add_department');
            
       }
       public function department_list()
       {
           $data= array();
           $data['dep_list_info']=$this->department_model->department_list_info();
           $this->load->view('eu/departmentList',$data);
       }
       public function edit_dep_info($dep_id)
       {
           $data= array();
           $data['edit_dep_info']=$this->department_model->edit_department_list_info($dep_id);
           $this->load->view('eu/updateDep',$data);   
       }
       public function Update_dep_information()
       {
            $data =array();
            $data['dep_id']=$this->input->post('dep_id',true);
            $data['department_name']=$this->input->post('department_name',true);
            $this->department_model->update_dep_info($data);
           
          $sdata=array();
          $sdata['message']="Department Updated Successful";
          $this->session->set_userdata($sdata);
          redirect('department_controller/department_list');   
           
       }
}
