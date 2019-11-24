<?php

/**
 * 
 */
class Siswa_model extends CI_Model
{
	function getAll()
	{
		return $this->db->get('data_siswa')->result_array();
	}

	function getSiswabyIdSiswa($id)
	{
		$query = 'SELECT ds.* FROM data_siswa ds WHERE ds.nis =' . $id;

		return $this->db->query($query)->row_array();
	}

	function getSiswabyIdKelas($id)
	{

		$query = 'SELECT ds.*,k.nama_kelas FROM data_siswa ds, kelas k WHERE ds.kode_kelas = k.kode_kelas AND ds.kode_kelas = ' . $id;

		return $this->db->query($query)->result_array();
	}

	function insert()
	{
		$data = [

			"nis" => $this->input->post('nis',true),
			"nama_siswa" => $this->input->post('nama',true),
			"jk" => $this->input->post('jenisKelamin',true),
			"alamat" => $this->input->post('alamat',true),
			"ttl" => $this->input->post('ttl',true),
			"kode_kelas" => $this->input->post('kelas',true),
		];

		$this->db->insert('data_siswa',$data);
	}

	function destroy($id)
	{
		$this->db->where('nis',$id);
		$this->db->delete('data_siswa');
	}

	function update()
	{
		$data = [

			"nama_siswa" => $this->input->post('nama',true),
			"jk" => $this->input->post('jenisKelamin',true),
			"alamat" => $this->input->post('alamat',true),
			"ttl" => $this->input->post('ttl',true),
			"kode_kelas" => $this->input->post('kelas',true),
		];

		$this->db->where('nis',$this->input->post('nis'));
		$this->db->update('data_siswa',$data);
	}
}