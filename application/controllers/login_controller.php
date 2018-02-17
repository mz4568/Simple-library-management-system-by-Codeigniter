<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login_controller extends CI_Controller {
    
	public function index()
	{
	   
            $this->load->view('login');
            
	}
        public function logout()
        {
            $this->session->unset_userdata('login_id');
            
            redirect('login_controller/index');
        }
}

