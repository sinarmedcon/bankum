<?php 

class Auth_model extends CI_Model{

    public function validasi_login($username, $password)
    {
        $this->db->select('*');
        return $this->db->get_where('blogger', array('username' => $username, 'password' => $password));
    }
}
