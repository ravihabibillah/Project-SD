<?php

/**
 * 
 */
class Raport extends CI_Controller
{
	
	function __construct()
	{
			parent::__construct();
			$this->load->model('Siswa_model');
			$this->load->model('Kelas_model');
			$this->load->model('Raport_model');
			$this->load->model('Mapel_model');
			$this->load->library('form_validation');
	}

	function index()
	{
		if ($this->session->flashdata('flash') == 'Sedang Login') {
			$this->session->set_flashdata('flash','Sedang Login');
			$data['status'] = 'Raport active';
			$data['siswa'] = $this->Siswa_model->getAll();

			$this->load->view('templates_dashboard/header',$data);
			$this->load->view('Raport/index');
			$this->load->view('templates_dashboard/footer');

		}
		else {
			$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
			redirect('Login');
		}
	}

	function detail($id_siswa,$id_kelas)
	{
		if ($this->session->flashdata('flash') == 'Sedang Login') {
			$this->session->set_flashdata('flash','Sedang Login');
			$data['status'] = 'Raport active';

			$data['siswa'] = $this->Siswa_model->getSiswabyIdSiswa($id_siswa);
			$data['kelas'] = $this->Kelas_model->getId($id_kelas);
			$data['nilai'] = $this->Raport_model->getNilaibyIdSiswa($id_siswa);


			$this->load->view('templates_dashboard/header',$data);
			$this->load->view('Raport/detail');
			$this->load->view('templates_dashboard/footer');

		}
		else {
			$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
			redirect('Login');
		}	
	}

	function tambah($id_siswa,$id_kelas)
	{
		if ($this->session->flashdata('flash') == 'Sedang Login') {
			$this->session->set_flashdata('flash','Sedang Login');
			$data['status'] = 'Raport active';
			
			$data['siswa'] = $this->Siswa_model->getSiswabyIdSiswa($id_siswa);
			// $data['mapel'] = $this->Mapel_model->getAll();
			$data['nilai'] = $this->Raport_model->getMapelNull($id_siswa);
			
				$this->load->view('templates_dashboard/header',$data);
				$this->load->view('Raport/tambah');
				$this->load->view('templates_dashboard/footer');
			if($this->input->post('submit')==!NULL){
				
				$this->Raport_model->insert();

				redirect('Raport/detail/'.$id_siswa.'/'.$id_kelas);
			}
		} else {
			$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
			redirect('Login');
		}
	}

	function edit($id_siswa,$id_kelas)
	{
		if ($this->session->flashdata('flash') == 'Sedang Login') {
			$this->session->set_flashdata('flash','Sedang Login');
			$data['status'] = 'Raport active';
			
			$data['siswa'] = $this->Siswa_model->getSiswabyIdSiswa($id_siswa);
			$data['mapel'] = $this->Mapel_model->getAll();
			$data['nilai'] = $this->Raport_model->getNilaibyIdSiswa($id_siswa);

			
				$this->load->view('templates_dashboard/header',$data);
				$this->load->view('Raport/edit');
				$this->load->view('templates_dashboard/footer');
			if($this->input->post('submit')==!NULL){
				
				$this->Raport_model->update();

				redirect('Raport/detail/'.$id_siswa.'/'.$id_kelas);
			}
		} else {
			$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
			redirect('Login');
		}
	}
}