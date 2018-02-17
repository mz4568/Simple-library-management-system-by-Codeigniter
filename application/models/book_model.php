<?php
class book_model extends CI_model{
    public function insert_book_information($data)
    {
          $this->db->insert('add_book',$data);  
          
    }
    public function book_list_info()
    {
             $this->db->select('*');
             $this->db->from('add_book');
             $query_result=$this->db->get();
             $result= $query_result->result();
             return $result;
    }
    public function edit_book_information($book_id)
    {
             $this->db->select('*');
             $this->db->from('add_book');
             $this->db->where('book_id',$book_id);
             $query_result=$this->db->get();
             $result= $query_result->row();
             return $result;  
    }
    public function update_book_information($data)
    {
     $this->db->where('book_id',$data['book_id']);
     $this->db->update('add_book',$data);
    }
   public function insert_author_info($data)
    {
          $this->db->insert('add_author',$data);  
          
    }
     public function author_list_info()
    {
             $this->db->select('*');
             $this->db->from('add_author');
             $query_result=$this->db->get();
             $result= $query_result->result();
             return $result;
    }
    public function edit_author_information($author_id)
    {
             $this->db->select('*');
             $this->db->from('add_author');
             $this->db->where('author_id',$author_id);
             $query_result=$this->db->get();
             $result= $query_result->row();
             return $result; 
    }
    public function update_author_info($data)
    {
     $this->db->where('author_id',$data['author_id']);
     $this->db->update('add_author',$data);
    }
    
     public function issue_book_information($data)
     {
          $this->db->insert('issue_book',$data);  
          
    }
}
