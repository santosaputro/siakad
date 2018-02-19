<h1>Guru</h1>
<?php echo $this->session->flashdata('info'); ?><br>
<a href="<?php echo base_url('dashboard/tambahGuru') ?>" class="btn btn-primary">Tambah Guru</a>
<br><br>
<table class="table table-bordered">
  <tr>
    <td>No</td>
    <td>NIP</td>
    <td>Nama Guru</td>
    <td>Wali Kelas</td>
    <td>Foto</td>
    <td>Alamat</td>
    <td>Last Update</td>
    <td>pilihan</td>
  </tr>
  <?php $no=1; foreach ($guru as $data) : ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data->nip; ?></td>
    <td><?php echo $data->nama_guru; ?></td>
    <td><?php echo $data->wali_kelas; ?></td>
    <td><?php echo $data->foto; ?></td>
    <td><?php echo $data->alamat; ?></td>
    <td><?php echo $data->last_update; ?></td>
    <td>
      <a href="<?php echo base_url('dashboard/updateGuru/'), $data->id_guru; ?>" class="btn btn-success">Edit</a>
      <a href="<?php echo base_url('dashboard/deleteGuru/'), $data->id_guru; ?>" class="btn btn-warning" onclick="return confirm('Apa Anda yakin akan menghapus : <?php echo $data->nama_guru; ?> ?');">Hapus</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
