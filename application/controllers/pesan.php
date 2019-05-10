<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //jika user sudah login maka diarahkan ke pesan
        if ($this->session->userdata('username') == NULL) {
            redirect('login');
        }

        $this->load->library('form_validation');
        $this->load->model('pesan_model');
        $this->load->model('home_model');
    }

    public function isi($id)
    {
        $data['lapangan'] = $this->home_model->getData($id);
        $this->load->view('templates/header');
        $this->load->view('pesan/pesanan', $data);
        $this->load->view('templates/footer');
    }

    public function booking()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('alamat', 'Address', 'required');
        $this->form_validation->set_rules('tanggal', 'Date', 'required');
        $this->form_validation->set_rules('jumlah-lap', 'Order Number', 'required');
        $this->load->view('templates/header');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pesan/pesanan');
        } else {
            $fieldId = $this->input->post('field_id');
            $name = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $tanggal = $this->input->post('tanggal');
            $jumlah_lap = $this->input->post('jumlah-lap');
            $data = array(
                'field_id' => $fieldId,
                'order_name' => $name,
                'order_address' => $alamat,
                'order_date' => $tanggal,
                'order_number' => $jumlah_lap
            );
            $this->pesan_model->insertData($data);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
            Booking berhasil!
            </div>');
            $this->load->view('templates/footer');
            redirect(base_url('#tm-section-3'));
        }
    }
}
