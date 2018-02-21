<h1>Siswa</h1>
<!-- <?php echo $this->session->flashdata('info'); ?><br> -->
<a href="<?php echo base_url('dashboard/tambahSiswa') ?>" class="btn btn-primary">Tambah Siswa</a>
<br><br>
<table class="table table-bordered">
  <tr>
    <td>No</td>
    <td>NIS</td>
    <td>Nama Siswa</td>
    <td>Kelas</td>
    <td>alamat</td>
    <td>Last Update</td>
    <td>pilihan</td>
  </tr>
  <?php $no=1; foreach ($siswa as $data) : ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data->nis; ?></td>
    <td><?php echo $data->nama_siswa; ?></td>
    <td><?php echo $data->nama_ruang; ?></td>
    <td><?php echo $data->alamat; ?></td>
    <td><?php echo $data->last_update; ?></td>
    <td>
      <a href="<?php echo base_url('dashboard/updateSiswa/'), $data->id_siswa; ?>" class="btn btn-success">Edit</a>
      <a href="<?php echo base_url('dashboard/deleteSiswa/'), $data->id_siswa; ?>" class="btn btn-warning" onclick="return confirm('Apa Anda yakin akan menghapus : <?php echo $data->nama_siswa; ?> ?');">Hapus</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
