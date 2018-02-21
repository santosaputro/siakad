<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<div id="app">
  <table class="table table-bordered">
    <thead>
      <th>NIS</th>
      <th>Nama Siswa</th>
      <th>Kelas</th>
      <th>Nilai</th>
      <th>Opsi</th>
    </thead>
    <tbody v-for="murid in nilai" >
      <td>{{ murid.nis }}</td>
      <td>{{ murid.nama_siswa }}</td>
      <td>{{ murid.nama_ruang }}</td>
      <td v-model="nilai_siswa" name="nilai_siswa">{{ murid.nilai_siswa }}</td>
      <td v-if="murid.nilai_siswa <= 0">
        <a href="" class="btn btn-primary">Input Nilai</a>
      </td>
      <td v-else>
        <a href="" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-warning" onclick="return confirm('Apa Anda yakin akan menghapus ?');">Hapus</a>
      </td>
    </tbody>
  </table>
</div>

<script type="text/javascript">
  new Vue({
    el: '#app',
    data: {
      search: '',
      nilai_siswa: '',
      nilai: <?php echo $getNilai; ?>,
      kelas: <?php echo $kelas; ?>
    }
  });
</script>
