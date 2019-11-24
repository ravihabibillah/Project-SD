<?php

/**
 * 
 */
class Mapel_model extends CI_Model
{
	function getAll()
	{
		return $this->db->get('mapel')->result_array();	
	}

	function getbyId($id)
	{
		return $this->db->get_where('mapel',['kode_mapel' => $id])->row_array();
	}

	function insert()
	{
		$data = [

			"kode_mapel" => $this->input->post('kode',true),
			"nama_mapel" => $this->input->post('nama',true),
		];

		$this->db->insert('mapel',$data);
	}

	function update()
	{
		$data = [
			"nama_mapel" => $this->input->post('nama',true),
		];
		$this->db->where('kode_mapel',$this->input->post('kode'));
		$this->db->update('mapel',$data);
	}

}