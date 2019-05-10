<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //jika user belum login maka diarahkan ke home
        if ($this->session->userdata('username') == NULL) {
            redirect('login/index');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('home');
    }
}
