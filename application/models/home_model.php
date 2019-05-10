<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_model extends CI_Model
{
    public function get_posts()
    {
        $this->load->database();
        $query = $this->db->query('SELECT * FROM fields');
        return $query->result_array();
    }

    public function getData($id)
    {
        return $this->db->get_where('fields', array('field_id' => $id))->result_array();
    }
}
