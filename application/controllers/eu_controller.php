<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eu_controller extends CI_Controller {
       public function __construct() {
        parent::__construct();
        $this->load->model('eu_model');
        $this->load->model('department_model');
       }
    public function index (){
    $this->load->view('mainPage');

    }
    public function add_students()
    {
    $data['dep_list_info']=$this->department_model->department_list_info();
    $this->load->view('eu/addStudents',$data);   
    }
    public function insert_student_information()
       {
            $data =array();
            $data['student_id']=$this->input->post('student_id',true);
            $data['student_name']=$this->input->post('student_name',true);
            $data['dep_name']=$this->input->post('dep_name',true);
            $data['address']=$this->input->post('address',true);
           
            $this->eu_model->insert_information($data);
           
          $sdata=array();
          $sdata['message']="Student inserted Successful";
          $this->session->set_userdata($sdata);
          redirect('eu_controller/add_students');
            
       }
       public function student_list()
       {
           $data= array();
           $data['student_list_info']=$this->eu_model->student_info();
           $this->load->view('eu/studentList',$data);
       }
       public function edit_student_info($id)
       {
       $data=array();
       $data['edit_info']=$this->eu_model->edit_student_information($id);
       $data['dep_list_info']=$this->department_model->department_list_info();
       $this->load->view('eu/updatedStudentInfo',$data);
                
       }
       public function update_student_data()
       {
            $data =array();
            $data['id']=$this->input->post('id',true);
            $data['student_id']=$this->input->post('student_id',true);
            $data['student_name']=$this->input->post('student_name',true);
            $data['dep_name']=$this->input->post('dep_name',true);
            $data['address']=$this->input->post('address',true);
           
            $this->eu_model->update_information($data);
           
          $sdata=array();
          $sdata['message']="Student Updated Successful";
          $this->session->set_userdata($sdata);
          redirect('eu_controller/student_list'); 
       }
       
}