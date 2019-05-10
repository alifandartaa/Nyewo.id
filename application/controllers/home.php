<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
		$this->load->model('Home_model');
		$data['posts'] = $this->Home_model->get_posts();
		$this->load->view('templates/header');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}

	// public function getPost()
	// {


	// 	$this->load->view('home/index', $data);
	// }
}
