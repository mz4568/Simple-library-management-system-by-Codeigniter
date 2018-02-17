
<?php
class admin_model extends CI_model{
    public function insert_admin_set_about_us($data)
    {
     $this->db->insert('set_about_us',$data);   
        
    }
    public function adminViewAboutUs()
    {
             $this->db->select('*');
             $this->db->from('set_about_us');
             $query_result=$this->db->get();
             $result= $query_result->row();
             return $result;  
    }
   
    public function edit_data($about_us_id)
    {
             $this->db->select('*');
             $this->db->from('set_about_us');
             $this->db->where('about_us_id',$about_us_id);
             $query_result=$this->db->get();
             $result= $query_result->row();
             return $result;  
    }
    
    public function update_admin_about_us($data)
    {
     $this->db->where('about_us_id',$data['about_us_id']);   
     $this->db->update('set_about_us',$data);  
     redirect('admin_controller/view_about_us');  
    }
    
    public function product_information($data)
    {
      $this->db->insert('product_table',$data) ; 
    }
   
    public function productInfo()
    {
             $this->db->select('*');
             $this->db->from('product_table');
            // $this->db->where('user_id',$user_id);
             $query_result=$this->db->get();
             $rslt= $query_result->result();
             return $rslt;    
    }
    public function user_info_data()
    {
             $this->db->select('*');
             $this->db->from('data_registration');
            // $this->db->where('user_id',$user_id);
             $query_result=$this->db->get();
             $rslt= $query_result->result();
             return $rslt;     
    }
    public function edit_info_data($regi_id)
    {
             $this->db->select('*');
             $this->db->from('data_registration');
             $this->db->where('regi_id',$regi_id);
             $query_result=$this->db->get();
             $rslt= $query_result->row();
             return $rslt;     
    }
    public function update_info($data)
    {
     $this->db->where('regi_id',$data['regi_id']);   
     $this->db->update('data_registration',$data);  
     //redirect('admin_controller/view_about_us');
    }
    public function product_info_data()
    {
             $this->db->select('*');
             $this->db->from('product_table');
            // $this->db->where('user_id',$user_id);
             $query_result=$this->db->get();
             $rslt= $query_result->result();
             return $rslt; 
    }
    public function delete_information($product_id)
    {
     $this->db->where('product_id',$product_id);   
     $this->db->delete('product_table');  
    }
}