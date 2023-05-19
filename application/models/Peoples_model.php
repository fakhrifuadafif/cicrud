<?php

class peoples_model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }
    
}
