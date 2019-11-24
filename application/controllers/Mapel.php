<?php

	/**
	 * 
	 */
	class Mapel extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Mapel_model');
			$this->load->library('form_validation');
		}

		function index()
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				$data['mapel'] = $this->Mapel_model->getAll();

				$this->load->view('templates_dashboard/header',$data);
				$this->load->view('Mapel/index');
				$this->load->view('templates_dashboard/footer');

			}
			else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}


		function tambah()
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';

				$this->form_validation->set_rules('kode','Kode Mata Pelajaran','required|numeric');
				$this->form_validation->set_rules('nama','Nama Mata Pelajaran','required');

				if($this->form_validation->run() == FALSE) 
				{
					$this->load->view('templates_dashboard/header',$data);
					$this->load->view('Mapel/tambah');
					$this->load->view('templates_dashboard/footer');	
				} else {
					$this->Mapel_model->insert();
					
					redirect('Mapel/index');
				}

				
			}
			else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

		function edit($id)
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				$data['mapel'] = $this->Mapel_model->getbyId($id);

				$this->form_validation->set_rules('kode','Kode Mata Pelajaran','required|numeric');
				$this->form_validation->set_rules('nama','Nama Mata Pelajaran','required');

				if($this->form_validation->run() == FALSE) 
				{
					$this->load->view('templates_dashboard/header',$data);
					$this->load->view('Mapel/edit');
					$this->load->view('templates_dashboard/footer');	
				} else {
					$this->Mapel_model->update();
					
					redirect('Mapel/index');
				}

				
			}
			else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

	}