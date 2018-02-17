<?php
class issue_model extends CI_model{
    public function getBook($mz)
    {
             $this->db->select('*');
             $this->db->from('add_book');
             $this->db->where('dep_name',$mz);
             $query_result=$this->db->get();
             $result= $query_result->result();
             return $result;   
    }
    public function bookIssued_list_info()
    {
             $this->db->select('*');
             $this->db->from('issue_book');
             $query_result=$this->db->get();
             $result= $query_result->result();
             return $result; 
    }
   public function getName($zm)
    {
             $this->db->select('*');
             $this->db->from('add_student');
             $this->db->where('student_id',$zm);
             $query_result=$this->db->get();
             $result= $query_result->result();
             return $result;   
    }
}
