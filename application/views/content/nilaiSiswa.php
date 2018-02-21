<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<h1>Nilai Siswa</h1>
<?php echo $this->session->flashdata('info'); ?><br>
<br><br>

<div id="app">
  <div class="form-group row">
    <label for="kelas" class="col-sm-2 col-form-label">Pilih Kelas</label>
    <div class="col-sm-2">
      <div class="form-group">
        <select v-model="search" class="form-control" name="search" id="search">
          <option v-for="ruangs in ruang">{{ ruangs.nama_ruang }}</option>
        </select>
      </div>
    </div>
  </div>

  <div v-if="search === ''" ></div>
  <div v-else>
    <table class="table table-bordered">
      <tr style="background: #eee;">
        <th rowspan="2">NIS</th>
        <th rowspan="2">Nama</th>
        <th rowspan="2">kelas</th>
        <th colspan="3">Nilai</th>
        <th rowspan="2">jumlah</th>
        <th rowspan="2">pilihan</th>
      </tr>
      <tr style="background: #eee;">
        <th align="center">efektif</th>
        <th align="center">komulatif</th>
        <th align="center">psikomotorik</th>
      </tr>
      <tbody v-for="murid in filteredList" >
        <td colspan="4" v-if="search === 0">No List</td>
        <td>{{ murid.nis }}</td>
        <td>{{ murid.nama_siswa }}</td>
        <td>{{ murid.nama_ruang }}</td>
        <td name="efektif">{{ murid.efektif }}</td>
        <td name="komulatif">{{ murid.komulatif }}</td>
        <td name="psikomotorik">{{ murid.psikomotorik }}</td>
        <td>{{ murid.jumlah }}</td>
        <td v-if="murid.efektif <= 0 || murid.komulatif <= 0 || murid.psikomotorik <= 0">
          <a href="<?php echo base_url('dashboard/tambahNilaiSiswa/') ?>{{ murid.id_nilai}}" class="btn btn-primary">Input Nilai</a>
        </td>
        <td v-else>
          <a href="" class="btn btn-success">Edit</a>
          <a href="" class="btn btn-warning" onclick="return confirm('Apa Anda yakin akan menghapus ?');">Hapus</a>
        </td>
      </tbody>
    </table>
  </div>

</div>

<script type="text/javascript">
  const app = new Vue({
    el: '#app',
    data: {
      search: '',
      efektif: '',
      komulatif: '',
      psikomotorik: '',
      nilai: <?php echo $getNilai; ?>,
      ruang: <?php echo $kelas; ?>
    },
    computed: {
    filteredList() {
      return this.nilai.filter(post => {
        return post.nama_ruang.toLowerCase().includes(this.search.toLowerCase())
        })
      }
    }
  });

</script>
