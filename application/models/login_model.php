<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function insertData($data)
    {
        $this->db->insert('customer', $data);
    }

    public function checkData($username, $password)
    {
        $this->db->where('customer_username', $username);
        $this->db->where('customer_password', $password);
        $query = $this->db->get('customer');
        return $query->row_array();
    }
}
