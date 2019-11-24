<?php

/**
 * 
 */
class Guru_model extends CI_Model
{


	function getAll()
	{
		return $this->db->get('data_guru')->result_array();
	}

	function getbyId($id)
	{
		$query = 'SELECT * FROM data_guru WHERE nip =' . $id;

		return $this->db->query($query)->row_array();
	}

	function getGuruWithMapel()
	{
		$query = 'SELECT dg.*,mapel.nama_mapel FROM data_guru dg,mapel WHERE dg.kode_mapel = mapel.kode_mapel';

		return $this->db->query($query)->result_array();
	}
	
	function insert()
	{
		$data = [

			"nip" => $this->input->post('nip',true),
			"nama_guru" => $this->input->post('nama',true),
			"jk_guru" => $this->input->post('jenisKelamin',true),
			"alamat_guru" => $this->input->post('alamat',true),
			"kode_mapel" => $this->input->post('mapel',true),
		];

		$this->db->insert('data_guru',$data);
	}

	function update()
	{
		$data = [
			"nama_guru" => $this->input->post('nama',true),
			"jk_guru" => $this->input->post('jenisKelamin',true),
			"alamat_guru" => $this->input->post('alamat',true),
			"kode_mapel" => $this->input->post('mapel',true),
		];
		$this->db->where('nip',$this->input->post('nip'));
		$this->db->update('data_guru',$data);
	}	

}