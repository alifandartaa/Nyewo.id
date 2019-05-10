<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //jika user sudah login maka diarahkan ke home
        if ($this->session->userdata('username') != NULL) {
            redirect('home');
        }

        $this->load->library('form_validation');
        $this->load->model('login_model');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('login/login');
        } else {
            $username = $this->input->post('username');
            $password = sha1($this->input->post('password'));
            $result = $this->login_model->checkData($username, $password);
            // jika username ada 
            if ($result) {
                $data = array(
                    'id' => $result["customer_id"],
                    'username' => $result["customer_username"]
                );
                $this->session->set_userdata($data);
                redirect('home');
                //jika username tidak ditemukan
            } else {
                $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">
                Username atau password salah
              </div>');
                redirect('login/index');
            }
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('repassword', 'Repeat password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('login/register');
        } else {
            $name = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = sha1($this->input->post('password'));
            $repassword = $this->input->post('repassword');
            $contact = $this->input->post('contact');
            $data = array(
                'customer_name' => $name,
                'customer_username' => $username,
                'customer_password' => $password,
                'contact' => $contact
            );
            $this->login_model->insertData($data);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
                Registrasi berhasil
              </div>');
            redirect('login/index');
        }
    }
}
