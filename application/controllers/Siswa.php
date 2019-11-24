	<?php

	/**
	 * 
	 */
	class Siswa extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Siswa_model');
			$this->load->model('Kelas_model');
			$this->load->library('form_validation');

		}

		function dataSeluruhSiswa()
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				$data['siswa'] = $this->Siswa_model->getAll();

				$this->load->view('templates_dashboard/header',$data);
				$this->load->view('Siswa/index');
				$this->load->view('templates_dashboard/footer');

			}
			else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

		function detail($id)	//Belum Selesai
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				$data['siswa'] = $this->Siswa_model->getSiswabyIdSiswa($id);	

				$this->form_validation->set_rules('nis','NIS','required|numeric');
				$this->form_validation->set_rules('nama','Nama Siswa','required');
				$this->form_validation->set_rules('ttl','Tempat/Tanggal Lahir','required');

				if($this->form_validation->run() == FALSE){
					$this->load->view('templates_dashboard/header',$data);
					$this->load->view('Siswa/detail');
					$this->load->view('templates_dashboard/footer');
				} else {
					$this->Siswa_model->update();
					redirect('Siswa/detail/'.$id);
				}
			}
			else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

		function tambahDataSiswa()
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				$data['kelas'] = $this->Kelas_model->getAll();
				$data['keterangan'] = 'tambahSeluruhSiswa';

				$this->form_validation->set_rules('nis','NIS','required|numeric');
				$this->form_validation->set_rules('nama','Nama Siswa','required');
				$this->form_validation->set_rules('ttl','Tempat/Tanggal Lahir','required');

				if($this->form_validation->run() == FALSE)
				{
					$this->load->view('templates_dashboard/header',$data);
					$this->load->view('Siswa/tambah');
					$this->load->view('templates_dashboard/footer');
				} else {
					$this->Siswa_model->insert();

					redirect('Siswa/dataSeluruhSiswa');
				}

			} else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

		function tambahDataSiswabyKelas($id)
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				$data['kelas'] = $this->Kelas_model->getId($id);

				$this->form_validation->set_rules('nis','NIS','required|numeric');
				$this->form_validation->set_rules('nama','Nama Siswa','required');
				$this->form_validation->set_rules('ttl','Tempat/Tanggal Lahir','required');

				if($this->form_validation->run() == FALSE)
				{
					$this->load->view('templates_dashboard/header',$data);
					$this->load->view('Siswa/tambah');
					$this->load->view('templates_dashboard/footer');
				} else {
					$this->Siswa_model->insert();

					redirect('Kelas/detail/'.$id);
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
				// $data['siswa'] = $this->Siswa_model->getSiswabyIdSiswa($id);

				
				$this->Siswa_model->destroy($id);

				redirect('Siswa/dataSeluruhSiswa');
				

			} else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

		function hapusbyKelas($id_siswa,$id_kelas)
		{
			if ($this->session->flashdata('flash') == 'Sedang Login') {
				$this->session->set_flashdata('flash','Sedang Login');
				$data['status'] = 'DS active';
				// $data['siswa'] = $this->Siswa_model->getSiswabyIdKelas($id_kelas);

				
				$this->Siswa_model->destroy($id_siswa);

				redirect('Kelas/detail/'.$id_kelas);
				

			} else {
				$this->session->set_flashdata('flash','Anda Belum Melakukan Login');
				redirect('Login');
			}
		}

	}