<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin_controller extends CI_Controller  {
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }
   public function index()
	{
		$this->load->view('admin_panel/home_admin');
	}
   public function logout()
        {
       
         $this->session->unset_userdata('regi_id');
         redirect('homeController/index');
       
        }
   public function  set_about_us()
           
        {
         $this->load->view('admin_panel/admin_set_about_us');
       
        }
        
   public function  admin_set_about_us ()
       {
       $data=array();
       $data['title']=$this->input->post('title',true);
       $data['content']=$this->input->post('content',true);
       $this->admin_model->insert_admin_set_about_us($data);
       
       $sdata=array();
       $sdata['message']='data inserted successfully completed';
       $this->session->set_userdata($sdata);
       redirect('admin_controller/set_about_us');
       }
   
   public function  view_about_us()
           
        {
         $data=array();
         $data['view_about_us']=$this->admin_model->adminViewAboutUs();
         $this->load->view('admin_panel/admin_view_about_us',$data);
       
        }
   public function edit_data($about_us_id)
           
   {
     $data=array();
     $data['edit_data']=$this->admin_model->edit_data($about_us_id);
     $this->load->view('admin_panel/update_about_us_data',$data);
  
   }
   public function admin_update_about_us()
   {
     $data=array();
       $data['about_us_id']=$this->input->post('about_us_id',true);
       $data['title']=$this->input->post('title',true);
       $data['content']=$this->input->post('content',true);
       $this->admin_model->update_admin_about_us($data);
       
       $sdata=array();
       $sdata['message']='data updated successfully completed';
       $this->session->set_userdata($sdata);
       redirect('admin_controller/set_about_us');   
   }
   public function product_info()
   {
            $data =array();
            $data['title']=$this->input->post('title',true);
            $data['description']=$this->input->post('description',true);
            $data['price']=$this->input->post('price',true);
            $data['name']=$this->input->post('name',true);
            $data['email']=$this->input->post('email',true);
            if($_FILES['image_path']['size']<=10000000){
                $result=$this->do_upload('image_path');
                if($result['upload_data']){
                    $data['image_path']="resource/img_path/" . $result['upload_data']['file_name'];
                }
            }else{
                
            }
            $this->admin_model->product_information($data);
            $sdata=array();
            $sdata['message']='product inserted successfully completed';
            $this->session->set_userdata($sdata);
             redirect('admin_controller/index');   
   }
    public function do_upload($image_file)
        {
                $config['upload_path']          = './resource/img_path/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10000000;
                $config['max_height']           = 768000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload($image_file))
                {
                        $error = array('error' => $this->upload->display_errors(),'upload_data' =>'');
                        return $error;
                       // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data(),'error' =>'');
                        return $data;
                        $this->load->view('upload_success', $data);
                }
        }

        public function view_product_information()
        {
          //$user_id=$this->session->userdata('user_id');
          $data=array();
          $data['view_product_info']=$this->admin_model->productInfo();
          $this->load->view('admin_panel/view_product_info',$data);
        }
 }
