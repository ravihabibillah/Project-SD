<?php

/**
 * 
 */
class Kelas_model extends CI_Model
{
	function getAll()
	{
		$this->db->select('kelas.kode_kelas,kelas.nama_kelas,data_guru.nama_guru');
		$this->db->from('kelas');
		$this->db->join('data_guru','kelas.nip = data_guru.nip','inner');

		return $this->db->get()->result_array();
	}

	function getId($id)
	{
		return $this->db->get_where('kelas',['kode_kelas' => $id])->row_array();
	}

	

	function insert()
	{
		$data = [

			"kode_kelas" => $this->input->post('kode',true),
			"nama_kelas" => $this->input->post('nama',true),
			"nip" => $this->input->post('wali',true),
		];

		$this->db->insert('kelas',$data);
	}

	function destroy($id)
	{
		$this->db->where('kode_kelas',$id);
		$this->db->delete('kelas');
	}

	function update()
	{
		$data = [

			"nama_kelas" => $this->input->post('nama',true),
			"nip" => $this->input->post('wali',true),
		];
		$this->db->where('kode_kelas',$this->input->post('kode'));
		$this->db->update('kelas',$data);
	}
}