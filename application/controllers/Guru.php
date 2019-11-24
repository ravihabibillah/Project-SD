<?php

/**
 * 
 */
class Guru extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Guru_model');
		$this->load->model('Mapel_model');
		$this->load->library('form_validation');
	}

	function index(){
		if ($this->session->flashdata('flash') == 'Sedang Login') {
			$this->session->set_flashdata('flash','Sedang Login');
			$data['status'] = 'DS active';
			$data['guru'] = $this->Guru_model->getGuruWithMapel();

			$this->load->view('templates_dashboard/header',$data);
			$this->load->view('Guru/index');
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
			$data['mapel'] = $this->Mapel_model->getAll();

			$this->form_validation->set_rules('nip','NIP','required|numeric');
			$this->form_validation->set_rules('nama','Nama Guru','required');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates_dashboard/header',$data);
				$this->load->view('Guru/tambah');
				$this->load->view('templates_dashboard/footer');
			} else {
				$this->Guru_model->insert();

				redirect('Guru/index');
			}

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
			$data['mapel'] = $this->Mapel_model->getAll();
			$data['guru'] = $this->Guru_model->getbyId($id);

			$this->form_validation->set_rules('nip','NIP','required|numeric');
			$this->form_validation->set_rules('nama','Nama Guru','required');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates_dashboard/header',$data);
				$this->load->view('Guru/edit');
				$this->load->view('templates_dashboard/footer');
			} else {
				$this->Guru_model->update();

				redirect('Guru/index');
			}

		} else {
			$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
			redirect('Login');
		}
	}
}