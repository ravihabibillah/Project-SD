<?php

	/**
	 * 
	 */
	class Kelas extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Kelas_model');
			$this->load->model('Siswa_model');	
			$this->load->model('Guru_model');	
			$this->load->library('form_validation');
		}

		function index()
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				$data['kelas'] = $this->Kelas_model->getAll();
				$this->load->view('templates_dashboard/header',$data);
				$this->load->view('Kelas/index');
				$this->load->view('templates_dashboard/footer');
			}
			else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

		function detail($id)
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				$data['siswa'] = $this->Siswa_model->getSiswabyIdKelas($id);
				$data['kelas'] = $this->Kelas_model->getId($id);

				$this->load->view('templates_dashboard/header',$data);
				$this->load->view('Kelas/detail');
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
				$data['guru'] = $this->Guru_model->getAll();

				$this->form_validation->set_rules('kode','Kode Kelas','required|numeric');
				$this->form_validation->set_rules('nama','Nama Kelas','required');

				if($this->form_validation->run() == FALSE)
				{
					$this->load->view('templates_dashboard/header',$data);
					$this->load->view('Kelas/tambah');
					$this->load->view('templates_dashboard/footer');
				} else {
					$this->Kelas_model->insert();

					redirect('Kelas/index');
				}

			} else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

		function hapus($id)
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				$data['kelas'] = $this->Kelas_model->getId($id);

				
				$this->Kelas_model->destroy($id);

				redirect('Kelas/index');
				

			} else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

		function edit($id)
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				$data['guru'] = $this->Guru_model->getAll();
				$data['kelas'] = $this->Kelas_model->getId($id);

				$this->form_validation->set_rules('kode','Kode Kelas','required|numeric');
				$this->form_validation->set_rules('nama','Nama Kelas','required');

				if($this->form_validation->run() == FALSE)
				{
					$this->load->view('templates_dashboard/header',$data);
					$this->load->view('Kelas/edit');
					$this->load->view('templates_dashboard/footer');
				} else {
					$this->Kelas_model->update();

					redirect('Kelas/index');
				}

			} else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

	}