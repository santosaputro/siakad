<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Index Page for this models.
 * @author : Santo Saputro
 */

class Mymodel extends CI_Model {
  /* kelas method */
  	// show kelas
  	public function getKelas() {
  		return $this->db->get('kelas');
  	}

  	// get where kelas
  	public function getWhereKelas($key) {
  		$this->db->where('id_kelas', $key);
  		return $this->db->get('kelas');
  	}

  	// insert kelas
  	public function addKelas($data) {
  		$this->db->insert('kelas', $data);
  	}

  	// update kelas
  	public function updateKelas($key, $data) {
  		$this->db->where('id_kelas', $key);
  		$this->db->update('kelas', $data);
  	}

  	// delete kelas
  	public function deleteKelas($key) {
  	 	$this->db->where('id_kelas',$key);
  		$this->db->delete('kelas');
  	}

  /* mapel method */
  	// show mapel
  	public function getMapel() {
  		return $this->db->get('mapel');
  	}

  	// get where mapel
  	public function getWhereMapel($key) {
  		$this->db->where('id_mapel', $key);
  		return $this->db->get('mapel');
  	}

  	// insert mapel
  	public function addMapel($data) {
  		$this->db->insert('mapel', $data);
  	}

  	// update mapel
  	public function updateMapel($key, $data) {
  		$this->db->where('id_mapel', $key);
  		$this->db->update('mapel', $data);
  	}

  	// delete mapel
  	public function deleteMapel($key) {
  	 	$this->db->where('id_mapel',$key);
  		$this->db->delete('mapel');
  	}

  /* Siswa method */
  	// show siswa
  	public function getSiswa() {
      $this->db->select('*');
      $this->db->from('kelas');
      $this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
      return $this->db->get();
  	}
  	// show siswa
  	public function getOldSiswa() {
      return $this->db->get('siswa');
  	}

  	// get where siswa
  	public function getWhereSiswa($key) {
  		$this->db->where('id_siswa', $key);
  		return $this->db->get('siswa');
  	}

  	// insert siswa
  	public function addSiswa($data) {
  		$this->db->insert('siswa', $data);
  	}

  	// update siswa
  	public function updateSiswa($key, $data) {
  		$this->db->where('id_siswa', $key);
  		$this->db->update('siswa', $data);
  	}

  	// delete siswa
  	public function deleteSiswa($key) {
  	 	$this->db->where('id_siswa',$key);
  		$this->db->delete('siswa');
  	}

  /* Guru method */
  	// show guru
  	public function getGuru() {
  		return $this->db->get('guru');
  	}

  	// get where guru
  	public function getWhereGuru($key) {
  		$this->db->where('id_guru', $key);
  		return $this->db->get('guru');
  	}

  	// insert guru
  	public function addGuru($data) {
  		$this->db->insert('guru', $data);
  	}

  	// update guru
  	public function updateGuru($key, $data) {
  		$this->db->where('id_guru', $key);
  		$this->db->update('guru', $data);
  	}

  	// delete guru
  	public function deleteGuru($key) {
  	 	$this->db->where('id_guru',$key);
  		$this->db->delete('guru');
  	}

  /* Jadwal Pelajaran method */
  	// show Jadwal Pelajaran
  	public function getJadwal() {
  		$this->db->select('*');
      $this->db->from('jadwal_pelajaran');
      $this->db->join('kelas', 'kelas.id_kelas = jadwal_pelajaran.id_kelas');
      $this->db->join('mapel', 'mapel.id_mapel = jadwal_pelajaran.id_mapel');
      $this->db->join('guru', 'guru.id_guru = jadwal_pelajaran.id_guru');
      return $this->db->get();
  	}

  	// get where Jadwal Pelajaran
  	public function getWhereJadwal($key) {
      $this->db->select('*');
      $this->db->where('id_jadwal', $key);
      $this->db->from('jadwal_pelajaran');
      $this->db->join('kelas', 'kelas.id_kelas = jadwal_pelajaran.id_kelas');
      $this->db->join('mapel', 'mapel.id_mapel = jadwal_pelajaran.id_mapel');
      $this->db->join('guru', 'guru.id_guru = jadwal_pelajaran.id_guru');
      return $this->db->get();
  	}

  	// insert Jadwal Pelajaran
  	public function addJadwal($data) {
  		$this->db->insert('jadwal_pelajaran', $data);
  	}

  	// update Jadwal Pelajaran
  	public function updateJadwal($key, $data) {
  		$this->db->where('id_jadwal', $key);
  		$this->db->update('jadwal_pelajaran', $data);
  	}

  	// delete Jadwal Pelajaran
  	public function deleteJadwal($key) {
  	 	$this->db->where('id_jadwal',$key);
  		$this->db->delete('jadwal_pelajaran');
  	}

  // Nilai Siswa
    // show Nilai Siswa
  	public function getNilai() {
  		$this->db->select('*');
      $this->db->from('siswa');
      $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
      $this->db->join('nilai_siswa', 'nilai_siswa.id_siswa = siswa.id_siswa');
      return $this->db->get();
  	}

    // get where Nilai Siswa
  	public function getWhereNilai($key) {
  		$this->db->select('*');
      $this->db->where('id_nilai', $key);
      $this->db->from('siswa');
      $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
      $this->db->join('nilai_siswa', 'nilai_siswa.id_siswa = siswa.id_siswa');
      return $this->db->get();
  	}

  	// insert Nilai Siswa
  	public function addNilaiSiswa($data) {
  		$this->db->insert('nilai_siswa', $data);
  	}

  	// update Nilai Siswa
  	public function updateNilaiSiswa($key, $data) {
  		$this->db->where('id_nilai', $key);
  		$this->db->update('nilai_siswa', $data);
  	}

  	// delete Nilai Siswa
  	public function deleteNilaiSiswa($key) {
  	 	$this->db->where('id_nilai',$key);
  		$this->db->delete('nilai_siswa');
  	}


    // test ---------------------------------------------
    public function testNilai() {
      return $this->db->get('testNilai');
    }
}
