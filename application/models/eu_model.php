<?php

class eu_model extends CI_model {
    public function insert_information($data)
    {
      $this->db->insert('add_student',$data);  
    }
    public function student_info()
    {
             $this->db->select('*');
             $this->db->from('add_student');
             $query_result=$this->db->get();
             $result= $query_result->result();
             return $result;  
    }
     public function edit_student_information($id)
    {
             $this->db->select('*');
             $this->db->from('add_student');
             $this->db->where('id',$id);
             $query_result=$this->db->get();
             $result= $query_result->row();
             return $result;  
    }
    public function update_information($data)
    {
        $this->db->where('id',$data['id']);
        $this->db->update('add_student',$data);  
    }
}
