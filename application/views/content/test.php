<table class="table table-bordered">
  <tr>
    <th rowspan="2">NIS</th>
    <th rowspan="2">Nama</th>
    <th rowspan="2">kelas</th>
    <th colspan="3">Nilai</th>
    <th rowspan="2">jumlah</th>
    <th rowspan="2">pilihan</th>
  </tr>
  <tr>
    <th align="center">efektif</th>
    <th align="center">efektif</th>
    <th align="center">psikomotorik</th>
  </tr>
  <?php $no=1; foreach ($nilai as $data) : ?>
  <tr>
    <td><?php echo $data->nim; ?></td>
    <td><?php echo $data->nama; ?></td>
    <td><?php echo $data->kelas; ?></td>
    <td><?php echo $data->efektif; ?></td>
    <td><?php echo $data->efektif; ?></td>
    <td><?php echo $data->psikomotorik; ?></td>
    <td><?php echo $data->jumlah; ?></td>
    <td>
      <a href="" class="btn btn-success">Edit</a>
      <a href="" class="btn btn-warning" onclick="return confirm('Apa Anda yakin akan menghapus ?');">Hapus</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
