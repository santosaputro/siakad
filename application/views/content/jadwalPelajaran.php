<h1>Jadwal Pelajaran</h1>
<?php echo $this->session->flashdata('info'); ?><br>
<a href="<?php echo base_url('dashboard/tambahJadwalPelajaran') ?>" class="btn btn-primary">Tambah Jadwal Pelajaran</a>
<br><br>
<table class="table table-bordered">
  <tr>
    <td>No</td>
    <td>id_kelas</td>
    <td>nama_kelas</td>
    <td>id_mapel</td>
    <td>nama_mapel</td>
    <td>hari</td>
    <td>jam_pelajaran</td>
    <td>id_guru</td>
    <td>nama_guru</td>
    <td>pilihan</td>
  </tr>
  <?php $no=1; foreach ($jadwal as $data) : ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data->id_kelas; ?></td>
    <td><?php echo $data->nama_ruang; ?></td>
    <td><?php echo $data->id_mapel; ?></td>
    <td><?php echo $data->nama_mapel; ?></td>
    <td><?php echo $data->hari; ?></td>
    <td><?php echo $data->jam_pelajaran; ?></td>
    <td><?php echo $data->id_guru; ?></td>
    <td><?php echo $data->nama_guru; ?></td>
    <td>
      <a href="<?php echo base_url('dashboard/updateJadwalPelajaran/'), $data->id_jadwal; ?>" class="btn btn-success">Edit</a>
      <a href="<?php echo base_url('dashboard/deleteJadwalPelajaran/'), $data->id_jadwal; ?>" class="btn btn-warning" onclick="return confirm('Apa Anda yakin akan menghapus : <?php ?> ?');">Hapus</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
