<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Index Page for this models.
 * @author : Santo Saputro
 */

class Dashboard extends CI_Controller {

  function __construct() {

		parent::__construct();
		$this->load->helper(array('form', 'url'));
    $this->load->model('mymodel');

		// if($this->session->userdata('status') != "login"){
		// 	redirect('Login');
		// }

	}

  // Index
  public function index()
	{
    $data['sidebar'] = 'content/sidebar';
		$data['content'] = 'content/dashboard';

		$this->load->view('layout/dashboard', $data);
	}

// Kelas Function
  // Show
  public function kelas()
	{
    $data['sidebar']  = 'content/sidebar';
		$data['content']  = 'content/kelas';
    $data['kelas']    = $this->mymodel->getKelas()->result();

		$this->load->view('layout/dashboard', $data);
	}

  // Add Form
  public function tambahKelas()
	{
    $data['sidebar']  = 'content/sidebar';
		$data['content']  = 'content/formKelas';
    $data['title']    = 'Tambah Kelas';

    $key	= $this->uri->segment(3);
		$query	= $this->mymodel->getWhereKelas($key);

		if($query->num_rows()>0) {


			foreach ($query->result() as $row) {

				$data['id_kelas']         = $row->id_kelas;
				$data['nama_ruang']       = $row->nama_ruang;
				$data['kapasitas_ruang']  = $row->kapasitas_ruang;
			}

		} else {

			$data['id_kelas']			     = '';
			$data['nama_ruang']			   = '';
			$data['kapasitas_ruang']   = '';

		}

		$this->load->view('layout/dashboard', $data);
	}

  // Update Form
  public function updateKelas()
	{
    $data['sidebar']  = 'content/sidebar';
		$data['content']  = 'content/formKelas';
    $data['title']    = 'Update Kelas';

    $key	= $this->uri->segment(3);
		$query	= $this->mymodel->getWhereKelas($key);

		if($query->num_rows()>0) {


			foreach ($query->result() as $row) {

				$data['id_kelas']         = $row->id_kelas;
				$data['nama_ruang']       = $row->nama_ruang;
				$data['kapasitas_ruang']  = $row->kapasitas_ruang;
			}

		} else {

			$data['id_kelas']			     = '';
			$data['nama_ruang']			   = '';
			$data['kapasitas_ruang']   = '';

		}

		$this->load->view('layout/dashboard', $data);
	}

  // Save
  public function saveKelas()
	{
    $data = array(
      'nama_ruang'      => $this->input->post('nama_ruang'),
      'kapasitas_ruang' => $this->input->post('kapasitas_ruang')
    );

    $key    = $this->input->post('id_kelas');
		$query  = $this->mymodel->getWhereKelas($key);

    if ($query->num_rows()>0) {
      $this->mymodel->updateKelas($key,$data);
      $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
    } else {
      $this->mymodel->addKelas($data);
      $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
    }
    redirect('dashboard/kelas');
  }

  // Delete
	public function deleteKelas() {

		$key    = $this->uri->segment(3);
		$query  = $this->mymodel->getWhereKelas($key);
		if($query->num_rows()>0)
		{
			$this->mymodel->deleteKelas($key);
      $this->session->set_flashdata('info','<div class="alert alert-warning" role="alert">Data berhasil dihapus</div>');
		}
		redirect('dashboard/kelas');
	}


// Mapel Function
  // Show
  public function mapel()
	{
    $data['sidebar'] = 'content/sidebar';
		$data['content'] = 'content/mapel';
    $data['kelas']    = $this->mymodel->getMapel()->result();

		$this->load->view('layout/dashboard', $data);
	}

  // Add Form
  public function tambahMapel()
	{
    $data['sidebar']  = 'content/sidebar';
		$data['content']  = 'content/formMapel';
    $data['title']    = 'Tambah Mapel';

    $key	= $this->uri->segment(3);
		$query	= $this->mymodel->getWhereMapel($key);

		if($query->num_rows()>0) {


			foreach ($query->result() as $row) {

				$data['id_mapel']         = $row->id_mapel;
				$data['nama_mapel']       = $row->nama_mapel;
			}

		} else {

			$data['id_mapel']			     = '';
			$data['nama_mapel']			   = '';

		}

		$this->load->view('layout/dashboard', $data);
	}

  // Update Form
  public function updateMapel()
	{
    $data['sidebar']  = 'content/sidebar';
		$data['content']  = 'content/formMapel';
    $data['title']    = 'Update Mapel';

    $key	= $this->uri->segment(3);
		$query	= $this->mymodel->getWhereMapel($key);

    if($query->num_rows()>0) {


			foreach ($query->result() as $row) {

				$data['id_mapel']         = $row->id_mapel;
				$data['nama_mapel']       = $row->nama_mapel;
			}

		} else {

			$data['id_mapel']			     = '';
			$data['nama_mapel']			   = '';

		}

		$this->load->view('layout/dashboard', $data);
	}

  // Save
  public function saveMapel()
	{
    $data = array(
      'nama_mapel'      => $this->input->post('nama_mapel')
    );

    $key    = $this->input->post('id_mapel');
		$query  = $this->mymodel->getWhereMapel($key);

    if ($query->num_rows()>0) {
      $this->mymodel->updateMapel($key,$data);
      $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
    } else {
      $this->mymodel->addMapel($data);
      $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
    }
    redirect('dashboard/mapel');
  }

  // Delete
	public function deleteMapel() {

		$key    = $this->uri->segment(3);
		$query  = $this->mymodel->getWhereMapel($key);
		if($query->num_rows()>0)
		{
			$this->mymodel->deleteMapel($key);
      $this->session->set_flashdata('info','<div class="alert alert-warning" role="alert">Data berhasil dihapus</div>');
		}
		redirect('dashboard/mapel');
	}


// Siswa Function
  // Show
  public function siswa()
  {
    $data['sidebar'] = 'content/sidebar';
    $data['content'] = 'content/siswa';
    $data['siswa']    = $this->mymodel->getSiswa()->result();

    $this->load->view('layout/dashboard', $data);
  }

  // Add Form
  public function tambahSiswa()
  {
    $data['sidebar']  = 'content/sidebar';
    $data['content']  = 'content/formSiswa';
    $data['title']    = 'Tambah Siswa';
    $data['kelas']    = $this->mymodel->getKelas()->result();

    $key	= $this->uri->segment(3);
    $query	= $this->mymodel->getWhereSiswa($key);

    if($query->num_rows()>0) {


      foreach ($query->result() as $row) {

        $data['id_siswa']     = $row->id_siswa;
        $data['nis']          = $row->nis;
        $data['nama_siswa']   = $row->nama_siswa;
        $data['password']     = $row->password;
        $data['id_kelas']     = $row->id_kelas;
        $data['alamat']       = $row->alamat;
      }

    } else {

      $data['id_siswa']     = '';
      $data['nis']          = '';
      $data['nama_siswa']	  = '';
      $data['password']			= '';
      $data['alamat']			  = '';
    }

    $this->load->view('layout/dashboard', $data);
  }

  // Update Form
  public function updateSiswa()
  {
    $data['sidebar']  = 'content/sidebar';
    $data['content']  = 'content/formSiswa';
    $data['title']    = 'Update Siswa';
    $data['kelas']    = $this->mymodel->getKelas()->result();

    $key	= $this->uri->segment(3);
    $query	= $this->mymodel->getWhereSiswa($key);

    if($query->num_rows()>0) {


      foreach ($query->result() as $row) {

        $data['id_siswa']     = $row->id_siswa;
        $data['nis']          = $row->nis;
        $data['nama_siswa']   = $row->nama_siswa;
        $data['password']     = $row->password;
        $data['alamat']       = $row->alamat;
      }

    } else {

      $data['id_siswa']     = '';
      $data['nis']          = '';
      $data['nama_siswa']	  = '';
      $data['password']			= '';
      $data['alamat']			  = '';
    }

    $this->load->view('layout/dashboard', $data);
  }

  // Save
  public function savesiswa()
  {
    $data = array(
      'id_siswa'      => $this->input->post('id_siswa'),
      'nis'           => $this->input->post('nis'),
      'nama_siswa'    => $this->input->post('nama_siswa'),
      'password'      => $this->input->post('password'),
      'id_kelas'      => $this->input->post('id_kelas'),
      'alamat'        => $this->input->post('alamat')
    );

    $key    = $this->input->post('id_siswa');
    $query  = $this->mymodel->getWhereSiswa($key);

    if ($query->num_rows()>0) {
      $this->mymodel->updateSiswa($key,$data);
      $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
    } else {
      $this->mymodel->addSiswa($data);
      $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
    }
    redirect('dashboard/siswa');
  }

  // Delete
  public function deleteSiswa() {

    $key    = $this->uri->segment(3);
    $query  = $this->mymodel->getWhereSiswa($key);
    if($query->num_rows()>0)
    {
      $this->mymodel->deleteSiswa($key);
      $this->session->set_flashdata('info','<div class="alert alert-warning" role="alert">Data berhasil dihapus</div>');
    }
    redirect('dashboard/siswa');
  }


// Guru Function
  // Show
  public function guru()
  {
    $data['sidebar'] = 'content/sidebar';
    $data['content'] = 'content/guru';
    $data['guru']    = $this->mymodel->getGuru()->result();

    $this->load->view('layout/dashboard', $data);
  }

  // Add Form
  public function tambahGuru()
  {
    $data['sidebar']  = 'content/sidebar';
    $data['content']  = 'content/formGuru';
    $data['title']    = 'Tambah Guru';
    $data['kelas']    = $this->mymodel->getKelas()->result();

    $key	= $this->uri->segment(3);
    $query	= $this->mymodel->getWhereGuru($key);

    if($query->num_rows()>0) {

      foreach ($query->result() as $row) {

        $data['id_guru']     = $row->id_guru;
        $data['nip']         = $row->nip;
        $data['nama_guru']   = $row->nama_guru;
        $data['password']    = $row->password;
        $data['foto']        = $row->foto;
        $data['alamat']      = $row->alamat;
      }

    } else {

      $data['id_guru']      = '';
      $data['nip']          = '';
      $data['nama_guru']	  = '';
      $data['password']			= '';
      $data['foto']			    = '';
      $data['alamat']			  = '';
    }

    $this->load->view('layout/dashboard', $data);
  }

  // Update Form
  public function updateGuru()
  {
    $data['sidebar']  = 'content/sidebar';
    $data['content']  = 'content/formGuru';
    $data['title']    = 'Update Guru';
    $data['kelas']    = $this->mymodel->getKelas()->result();

    $key	   = $this->uri->segment(3);
    $query	 = $this->mymodel->getWhereGuru($key);

    if($query->num_rows()>0) {

      foreach ($query->result() as $row) {

        $data['id_guru']     = $row->id_guru;
        $data['nip']         = $row->nip;
        $data['nama_guru']   = $row->nama_guru;
        $data['password']    = $row->password;
        $data['foto']        = $row->foto;
        $data['alamat']      = $row->alamat;
      }

      } else {

      $data['id_guru']      = '';
      $data['nip']          = '';
      $data['nama_guru']	  = '';
      $data['password']			= '';
      $data['foto']			    = '';
      $data['alamat']			  = '';
      }

      $this->load->view('layout/dashboard', $data);
      }

  // Save
  public function saveGuru()
  {
    $data = array(
      'id_guru'      => $this->input->post('id_guru'),
      'nip'          => $this->input->post('nip'),
      'nama_guru'    => $this->input->post('nama_guru'),
      'password'     => $this->input->post('password'),
      'wali_kelas'   => $this->input->post('wali_kelas'),
      'foto'         => $this->input->post('foto'),
      'alamat'       => $this->input->post('alamat')
    );

    $key    = $this->input->post('id_guru');
    $query  = $this->mymodel->getWhereGuru($key);

    if ($query->num_rows()>0) {
      $this->mymodel->updateGuru($key,$data);
      $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
    } else {
      $this->mymodel->addGuru($data);
      $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
    }
    redirect('dashboard/guru');
  }

  // Delete
  public function deleteGuru() {

    $key    = $this->uri->segment(3);
    $query  = $this->mymodel->getWhereGuru($key);
    if($query->num_rows()>0)
    {
      $this->mymodel->deleteGuru($key);
      $this->session->set_flashdata('info','<div class="alert alert-warning" role="alert">Data berhasil dihapus</div>');
    }
    redirect('dashboard/guru');
  }


  // Jadwal Pelajaran Function
    // Show
    public function jadwalPelajaran()
    {
      $data['sidebar'] = 'content/sidebar';
      $data['content'] = 'content/jadwalPelajaran';
      $data['jadwal']  = $this->mymodel->getJadwal()->result();

      $this->load->view('layout/dashboard', $data);
    }

    // Add Form
    public function tambahjadwalPelajaran()
    {
      $data['sidebar']  = 'content/sidebar';
      $data['content']  = 'content/formJadwalPelajaran';
      $data['title']    = 'Tambah Jadwal Pelajaran';
      $data['kelas']    = $this->mymodel->getKelas()->result();
      $data['mapel']    = $this->mymodel->getMapel()->result();
      $data['guru']     = $this->mymodel->getGuru()->result();

      $key	= $this->uri->segment(3);
      $query	= $this->mymodel->getWhereJadwal($key);

      if($query->num_rows()>0) {

        foreach ($query->result() as $row) {

          $data['id_jadwal']      = $row->id_jadwal;
          $data['id_kelas']       = $row->id_kelas;
          $data['nama_ruang']     = $row->nama_ruang;
          $data['id_mapel']       = $row->id_mapel;
          $data['nama_mapel']     = $row->nama_mapel;
          $data['hari']           = $row->hari;
          $data['jam_pelajaran']  = $row->jam_pelajaran;
          $data['id_guru']        = $row->id_guru;
          $data['nama_guru']      = $row->nama_guru;
        }

      } else {

        $data['id_jadwal']      = '';
        $data['id_kelas']       = '';
        $data['nama_ruang']     = '';
        $data['id_mapel']       = '';
        $data['nama_mapel']     = '';
        $data['hari']           = '';
        $data['jam_pelajaran']  = '';
        $data['id_guru']        = '';
        $data['nama_guru']      = '';
      }

      $this->load->view('layout/dashboard', $data);
    }

    // Add Form
    public function updateJadwalPelajaran()
    {
      $data['sidebar']  = 'content/sidebar';
      $data['content']  = 'content/formJadwalPelajaran';
      $data['title']    = 'Update Jadwal Pelajaran';
      $data['kelas']    = $this->mymodel->getKelas()->result();
      $data['mapel']    = $this->mymodel->getMapel()->result();
      $data['guru']     = $this->mymodel->getGuru()->result();

      $key	= $this->uri->segment(3);
      $query	= $this->mymodel->getWhereJadwal($key);

      if($query->num_rows()>0) {

        foreach ($query->result() as $row) {

          $data['id_jadwal']      = $row->id_jadwal;
          $data['id_kelas']       = $row->id_kelas;
          $data['nama_ruang']     = $row->nama_ruang;
          $data['id_mapel']       = $row->id_mapel;
          $data['nama_mapel']     = $row->nama_mapel;
          $data['hari']           = $row->hari;
          $data['jam_pelajaran']  = $row->jam_pelajaran;
          $data['id_guru']        = $row->id_guru;
          $data['nama_guru']      = $row->nama_guru;
        }

      } else {

        $data['id_jadwal']      = '';
        $data['id_kelas']       = '';
        $data['nama_ruang']     = '';
        $data['id_mapel']       = '';
        $data['nama_mapel']     = '';
        $data['hari']           = '';
        $data['jam_pelajaran']  = '';
        $data['id_guru']        = '';
        $data['nama_guru']      = '';
      }

      $this->load->view('layout/dashboard', $data);
    }

    // Save
    public function saveJadwalPelajaran()
    {
      $data = array(
        'id_jadwal'       => $this->input->post('id_jadwal'),
        'id_kelas'        => $this->input->post('id_kelas'),
        'id_mapel'        => $this->input->post('id_mapel'),
        'hari'            => $this->input->post('hari'),
        'jam_pelajaran'   => $this->input->post('jam_pelajaran'),
        'id_guru'         => $this->input->post('id_guru')
      );

      $key    = $this->input->post('id_jadwal');
      $query  = $this->mymodel->getWhereJadwal($key);

      if ($query->num_rows()>0) {
        $this->mymodel->updateJadwal($key,$data);
        $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
      } else {
        $this->mymodel->addJadwal($data);
        $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
      }
      redirect('dashboard/jadwalPelajaran');
    }

    // Delete
    public function deleteJadwalPelajaran() {

      $key    = $this->uri->segment(3);
      $query  = $this->mymodel->getWhereJadwal($key);
      if($query->num_rows()>0)
      {
        $this->mymodel->deleteJadwal($key);
        $this->session->set_flashdata('info','<div class="alert alert-warning" role="alert">Data berhasil dihapus</div>');
      }
      redirect('dashboard/jadwalPelajaran');
    }

  // Nilai Siswa Fuction
    // Show
    public function nilaiSiswa() {
      $data['sidebar']  = 'content/sidebar';
      $data['content']  = 'content/nilaiSiswa';
      $data['kelas']    = json_encode($this->mymodel->getKelas()->result());
      $data['getNilai']  = json_encode($this->mymodel->getNilai()->result());

      $this->load->view('layout/dashboard', $data);

    }

    // Save
    public function saveNilaiSiswa()
    {
      $data = array(
        'id_nilai'       => $this->input->post('id_nilai'),
        'id_siswa'        => $this->input->post('id_siswa'),
        'id_kelas'        => $this->input->post('id_kelas'),
        'efektif'            => $this->input->post('efektif'),
        'komulatif'   => $this->input->post('komulatif'),
        'psikomotorik'         => $this->input->post('psikomotorik'),
        'jumlah'         => $this->input->post('efektif') + $this->input->post('komulatif') + $this->input->post('psikomotorik')
      );

      $key    = $this->input->post('id_nilai');
      $query  = $this->mymodel->getWhereNilai($key);

      if ($query->num_rows()>0) {
        $this->mymodel->updateNilaiSiswa($key,$data);
        $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
      } else {
        $this->mymodel->addNilaiSiswa($data);
        $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
      }
      redirect('dashboard/nilaiSiswa');
    }

    // Delete
    public function deleteNilaiSiswa() {

      $key    = $this->uri->segment(3);
      $query  = $this->mymodel->getWhereNilai($key);
      if($query->num_rows()>0)
      {
        $this->mymodel->deleteNilaiSiswa($key);
        $this->session->set_flashdata('info','<div class="alert alert-warning" role="alert">Data berhasil dihapus</div>');
      }
      redirect('dashboard/nilaiSiswa');
    }


// TEST FUNCTION
    public function test() {
      $data['sidebar']  = 'content/sidebar';
      $data['content']  = 'content/test';
      $data['nilai']  = $this->mymodel->testNilai()->result();
      $data['nilaia']  = json_encode($this->mymodel->getNilai()->result());

      $this->load->view('layout/dashboard', $data);
    }
}
