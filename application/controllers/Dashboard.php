<?php

	/**
	 * 
	 */
	class Dashboard extends CI_Controller
	{
		public function __construct() 
		{		//
			parent::__construct();
			$this->load->library('form_validation');
		}

		function index() 
		{
			$data['status'] = 'Index active';
			if($this->session->flashdata('flash') == 'Berhasil Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$this->load->view('templates_dashboard/header',$data);	
				$this->load->view('Dashboard/index');
				$this->load->view('templates_dashboard/footer');	
			} elseif ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$this->load->view('templates_dashboard/header',$data);	
				$this->load->view('Dashboard/index');
				$this->load->view('templates_dashboard/footer');
			}
			else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}
	}