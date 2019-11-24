<?php

/**
 * 
 */
class Raport_model extends CI_Model
{
	function getNilaibyIdSiswa($id)
	{
		$query = "SELECT nilai.*,mapel.* FROM nilai, mapel WHERE nilai.nis = $id AND nilai.kode_mapel = mapel.kode_mapel";

		return $this->db->query($query)->result_array();
	}

	function getMapelNull($id)
	{
		$query = 'SELECT mapel.*, nilai.nis, nilai.nilai FROM mapel LEFT OUTER JOIN nilai ON nilai.kode_mapel = mapel.kode_mapel AND nis ='. $id;
		return $this->db->query($query)->result_array();
	}

	function insert()
	{
		$jumlah = $this->input->post('jumlah',true);
		// echo $jumlah;
		$data = [
					"nis" => '',
					"kode_mapel" => '',
					"nilai" => '',
				];
		for ($i=1;$i<=$jumlah;$i++) {
			if($this->input->post('mapel'.$i) != NULL) {
					$data = [
					"nis" => $this->input->post('nis',true),
					"kode_mapel" => $i,
					"nilai" => $this->input->post('mapel'.$i,true),
				];

				$this->db->insert('nilai',$data);
			}
		}
	}

	function update()
	{
		$jumlah = $this->input->post('jumlah',true);
		// echo $jumlah;
		for ($i=1;$i<=$jumlah;$i++) {

			$data = [
				"nilai" => $this->input->post('mapel'.$i,true),
			];

			$array = array('nis' => $this->input->post('nis'), 'kode_mapel' => $i);

			$this->db->where($array);
			$this->db->update('nilai',$data);
		}
		
	}
}