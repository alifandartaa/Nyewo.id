<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //jika user sudah login maka diarahkan ke pesan
        // if ($this->session->userdata('username') != NULL) {
        //     redirect('admin');
        // }
        $this->load->view('templates/header-admin');
        $this->load->library('form_validation');
        $this->load->model('admin_model');
        // $this->load->model('pesan_model');
    }

    public function index()
    {
        $this->load->view('admin/index');
    }

    public function viewLapangan()
    {
        $data['lapangan'] = $this->admin_model->getData();
        $this->load->view('admin/view_lapangan', $data);
    }

    // public function tes()
    // {
    //     $coba = $this->admin_model->checkStatusLapangan(2);
    // }

    public function deleteLapangan($id)
    {
        if ($this->admin_model->checkStatusLapangan($id)) {
            $this->admin_model->deleteData($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Lapangan telah dihapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Lapangan tidak bisa dihapus karena dipesan!</div>');
        }
        redirect('admin/viewLapangan');
    }

    public function updateLapangan($id)
    {
        $where = array('field_id' => $id);
        $data['lapangan'] = $this->admin_model->update($where, 'fields')->result();
        $this->load->view('admin/update_lapangan', $data);
    }

    public function updateProcess()
    {
        $this->form_validation->set_rules(
            'nama',
            'Name',
            'required|is_unique[fields.field_name]',
            array('is_unique' => 'Nama lapangan sudah ada, silahkan pakai nama lain')
        );
        $this->form_validation->set_rules('alamat', 'Address', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
        $this->form_validation->set_rules('telp', 'Phone Number', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->viewLapangan();
            // $this->load->view('admin/update_lapangan');
        } else {
            $name = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $harga = $this->input->post('harga');
            $telp = $this->input->post('telp');
            $kategori = $this->input->post('kategori');
            $id = $this->input->post('lapanganID');
            $data = array(
                'field_name' => $name,
                'field_address' => $alamat,
                'price' => $harga,
                'phone_number' => $telp,
                'kategori' => $kategori
            );
            //harusnya membawa ID, tapi dari mana???
            $this->admin_model->updateData($id, $data);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
                Lapangan telah dibuat!
              </div>');
            redirect('admin/viewLapangan');
        }
    }


    public function createLapangan()
    {
        $this->form_validation->set_rules(
            'nama',
            'Name',
            'required|is_unique[fields.field_name]',
            array('is_unique' => 'Nama lapangan sudah ada, silahkan pakai nama lain')
        );
        $this->form_validation->set_rules('alamat', 'Address', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
        $this->form_validation->set_rules('telp', 'Phone Number', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/create_lapangan');
        } else {
            $name = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $harga = $this->input->post('harga');
            $telp = $this->input->post('telp');
            $kategori = $this->input->post('kategori');
            $data = array(
                'field_name' => $name,
                'field_address' => $alamat,
                'price' => $harga,
                'phone_number' => $telp,
                'kategori' => $kategori
            );
            $this->admin_model->insertData($data);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
                Lapangan telah dibuat!
              </div>');
            redirect('admin/viewLapangan');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('home');
    }
}
