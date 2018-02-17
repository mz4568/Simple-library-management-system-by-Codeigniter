<?php defined('BASEPATH') OR exit('No direct script access allowed');
   
class book_controller extends CI_Controller{
     public function __construct() {
        parent::__construct();
        $this->load->model('book_model');
        $this->load->model('department_model');
    }
    public function add_book(){
        $data['dep_list_info']=$this->department_model->department_list_info();
        $this->load->view('eu/addBook',$data);
    }
    public function insert_book_information()
       {
            $data =array();
         
            $data['book_name']=$this->input->post('book_name',true);
            $data['dep_name']=$this->input->post('dep_name',true);
            $data['author_name']=$this->input->post('author_name',true);
           
            $this->book_model->insert_book_information($data);
           
          $sdata=array();
          $sdata['message']="book inserted Successful";
          $this->session->set_userdata($sdata);
          redirect('book_controller/add_book');
            
       }
       
       public function book_list()
       {
           $data= array();
           $data['book_list_info']=$this->book_model->book_list_info();
           $this->load->view('eu/bookList',$data);
       }
     
       public function edit_book_info($book_id)
       {
       $data=array();
       $data['edit_book']=$this->book_model->edit_book_information($book_id);
       $data['dep_list_info']=$this->department_model->department_list_info();
       $this->load->view('eu/updatedBookInfo',$data);
       }
       public function update_book_data()
       {
           $data =array();
           $data['book_id']=$this->input->post('book_id',true);
           $data['book_name']=$this->input->post('book_name',true);
           $data['dep_name']=$this->input->post('dep_name',true);
           $data['author_name']=$this->input->post('author_name',true);
           
           $this->book_model->update_book_information($data);
           
          $sdata=array();
          $sdata['message']="book updated Successful";
          $this->session->set_userdata($sdata);
          redirect('book_controller/book_list');
        }
         
        public function add_author()
        {
        $this->load->view('eu/addAuthor');
        }
         public function  insert_author_information()
   {
            $data =array();
            $data['author_name']=$this->input->post('author_name',true);
           
            $this->book_model->insert_author_info($data);
           
          $sdata=array();
          $sdata['message']="Author Name inserted Successful";
          $this->session->set_userdata($sdata);
          redirect('book_controller/add_author');
            
       }
        public function author_list()
       {
           $data= array();
           $data['author_list_info']=$this->book_model->author_list_info();
           $this->load->view('eu/authorList',$data);
       }
        public function edit_author_info($author_id)
       {
       $data=array();
       $data['edit_author']=$this->book_model->edit_author_information($author_id);
       $this->load->view('eu/updatedAuthorInfo',$data);
       }
     public function update_author_information()
       {
           $data =array();
           $data['author_id']=$this->input->post('author_id',true);
           $data['author_name']=$this->input->post('author_name',true);
           
           $this->book_model->update_author_info($data);
           
          $sdata=array();
          $sdata['message']="Author Name updated Successful";
          $this->session->set_userdata($sdata);
          redirect('book_controller/author_list');
        }
        
         public function issue_book_info()
       {
            $data =array();
            $data['student_id']=$this->input->post('student_id',true);
            $data['student_name']=$this->input->post('student_name',true);
            $data['dep_name']=$this->input->post('dep_name',true);
            $data['book_name']=$this->input->post('book_name',true);
           
            $this->book_model->issue_book_information($data);
           
          $sdata=array();
          $sdata['message']="book issued Successful";
          $this->session->set_userdata($sdata);
          redirect('book_controller/add_book');
            
       }
}
