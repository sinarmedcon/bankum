<?php 

class Blog_model extends CI_Model{
    public function data_blogger($cookie)
    {
        $this->db->select('*');
        $this->db->where('userid', $cookie);
        return $this->db->get('blogger');
    }
}