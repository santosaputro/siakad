<h1>Mapel</h1>
<?php echo $this->session->flashdata('info'); ?><br>
<a href="<?php echo base_url('dashboard/tambahMapel') ?>" class="btn btn-primary">Tambah Mapel</a>
<br><br>
<table class="table table-bordered">
  <tr>
    <td>No</td>
    <td>Nama Mata Pelajaran</td>
    <td>Last Update</td>
    <td>pilihan</td>
  </tr>
  <?php $no=1; foreach ($kelas as $data) : ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data->nama_mapel; ?></td>
    <td><?php echo $data->last_update; ?></td>
    <td>
      <a href="<?php echo base_url('dashboard/updateMapel/'), $data->id_mapel; ?>" class="btn btn-success">Edit</a>
      <a href="<?php echo base_url('dashboard/deleteMapel/'), $data->id_mapel; ?>" class="btn btn-warning" onclick="return confirm('Apa Anda yakin akan menghapus : <?php echo $data->nama_mapel; ?> ?');">Hapus</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
