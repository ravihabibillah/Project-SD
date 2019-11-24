<?php

	/**
	 * 
	 */
	class Login extends CI_Controller
	{

		public function __construct() {		//
			parent::__construct();

			$this->load->model('Login_model');
			$this->load->library('form_validation');	
		}

		function index() 
		{

			$data['judul'] = 'Login Admin Sekolah';
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run() == FALSE) {
				
				$this->load->view('templates/header',$data);
				$this->load->view('login');
				$this->load->view('templates/footer');
			} else {
				$this->Login_model->verification();

				if($this->Login_model->verification()) {
					$this->session->set_flashdata('flash','Berhasil Login');
					redirect('Dashboard');
				} else {
					$this->session->set_flashdata('flash','Gagal Login');
					redirect('Login');
				}
			}


		}
	}