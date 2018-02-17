<?php
    class  main_model  extends CI_model{
    public function main_data($email,$password)
    {
             $email=$this->input->post('email',true);
             $password=md5($this->input->post('password',true));
             $this->db->select('*');
             $this->db->from('login');
             $this->db->where('email',$email);
             $this->db->where('password',$password);
             $query_result=$this->db->get();
             $result= $query_result->row();
             return $result;        
    }
}