<h1>Kelas</h1>
<?php echo $this->session->flashdata('info'); ?><br>
<a href="<?php echo base_url('dashboard/tambahKelas') ?>" class="btn btn-primary">Tambah Kelas</a>
<br><br>
<table class="table table-bordered">
  <tr>
    <td>No</td>
    <td>Nama Kelas</td>
    <td>Kapasitas</td>
    <td>Last Update</td>
    <td>pilihan</td>
  </tr>
  <?php $no=1; foreach ($kelas as $data) : ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data->nama_ruang; ?></td>
    <td><?php echo $data->kapasitas_ruang; ?></td>
    <td><?php echo $data->last_update; ?></td>
    <td>
      <a href="<?php echo base_url('dashboard/updateKelas/'), $data->id_kelas; ?>" class="btn btn-success">Edit</a>
      <a href="<?php echo base_url('dashboard/deleteKelas/'), $data->id_kelas; ?>" class="btn btn-warning" onclick="return confirm('Apa Anda yakin akan menghapus : <?php echo $data->nama_ruang; ?> ?');">Hapus</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
