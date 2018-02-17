<?php


class department_model extends CI_model {
    public function insert_dep_information($data)
    {
      $this->db->insert('add_department',$data);  
    }
    public function department_list_info()
    {
             $this->db->select('*');
             $this->db->from('add_department');
             $query_result=$this->db->get();
             $result= $query_result->result();
             return $result;
    }
    public function edit_department_list_info($dep_id)
    {
             $this->db->select('*');
             $this->db->from('add_department');
             $this->db->where('dep_id',$dep_id);
             $query_result=$this->db->get();
             $result= $query_result->row();
             return $result;  
    }
    public function update_dep_info($data)
    {
     $this->db->where('dep_id',$data['dep_id']);
     $this->db->update('add_department',$data);
    }
    public function dep_data($dep)
    {
             $this->db->select('*');
             $this->db->from('add_department');
             $this->db->where('dep_id',$dep);
             $query_result=$this->db->get();
             $result= $query_result->row();
             return $result;  
    }
}
