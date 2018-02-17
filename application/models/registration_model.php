<?php
class registration_model extends CI_model{
    public function mz_registration_information($data)
    {
     $this->db->insert('data_registration',$data);   
        
    }
}
