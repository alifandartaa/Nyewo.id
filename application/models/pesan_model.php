<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan_model extends CI_Model
{
    public function insertData($data)
    {
        $this->db->insert('orderfields', $data);
    }
}
