<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function insertData($data)
    {
        $this->db->insert('fields', $data);
    }

    public function getData()
    {
        return $this->db->get('fields')->result_array();
    }

    public function deleteData($id)
    {
        $this->db->delete('fields', array('field_id' => $id));
    }

    public function update($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateData($id, $data)
    {
        $this->db->where('field_id', $id);
        $this->db->update('fields', $data);
    }

    public function checkStatusLapangan($id)
    {
        $data = $this->db->get_where('fields', array('field_id' => $id))->row_array();
        // print_r($data);
        // echo $data['status'];
        return $data['status'] == 1 ? TRUE : FALSE;
    }

    public function checkData($username, $password)
    {
        $this->db->where('admin_username', $username);
        $this->db->where('admin_password', $password);
        $query = $this->db->get('admin');
        return $query->row_array();
    }
}
