
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
          <button v-model=" murid.nis" type="submit" class="btn btn-primary" data-toggle="modal" v-bind:data-target="'#' + murid.nis">Input Nilai</button>

          <!-- Modal -->
          <div class="modal fade" v-bind:id="murid.nis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <form method="POST" v-bind:action="'http://localhost/siakad/dashboard/saveNilaiSiswa/' + murid.nis">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Nilai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                      <input type="text" class="form-control" id="id_nilai" name="id_nilai"v-model="murid.id_nilai" readonly>
                      <input type="text" class="form-control" id="id_siswa" name="id_siswa"v-model="murid.id_siswa" readonly>
                      <input type="text" class="form-control" id="id_kelas" name="id_kelas"v-model="murid.id_kelas" readonly>
                      <h2>{{murid.nama_siswa}}</h2>
                      <div class="form-group row">
                        <label for="efektif" class="col-sm-2 col-form-label">Efektif</label>
                        <div class="col-sm-2">
                          <input onkeyup="sum();" type="text" v-model="murid.efektif" class="form-control" id="efektif" name="efektif">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="komulatif" class="col-sm-2 col-form-label">Komulatif</label>
                        <div class="col-sm-2">
                          <input onkeyup="sum();" type="text" v-model="murid.komulatif" class="form-control" id="komulatif" name="komulatif">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="psikomotorik" class="col-sm-2 col-form-label">Psikomotorik</label>
                        <div class="col-sm-2">
                          <input onkeyup="sum();" type="text" v-model="murid.psikomotorik" class="form-control" id="psikomotorik" name="psikomotorik" >
                        </div>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary fcol-form-label">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Modal -->

        </td>
        <td v-else>
          <button v-model=" murid.nis" type="submit" class="btn btn-success" data-toggle="modal" v-bind:data-target="'#' + murid.nis">Edit</button>
          <a v-bind:href="'http://localhost/siakad/dashboard/deleteNilaiSiswa/' + murid.id_nilai" class="btn btn-warning" onclick="return confirm('Apa Anda yakin akan menghapus ?');">Hapus</a>
          <!-- Modal -->
          <div class="modal fade" v-bind:id="murid.nis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <form method="POST" v-bind:action="'http://localhost/siakad/dashboard/saveNilaiSiswa/' + murid.nis">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                      <input type="text" class="form-control" id="id_nilai" name="id_nilai"v-model="murid.id_nilai" hidden>
                      <input type="text" class="form-control" id="id_siswa" name="id_siswa"v-model="murid.id_siswa" hidden>
                      <input type="text" class="form-control" id="id_kelas" name="id_kelas"v-model="murid.id_kelas" hidden>

                      <p><strong>Nama :</strong> {{murid.nama_siswa}}</p>
                      <p><strong>NIS :</strong>{{murid.nis}}</p>
                      <p><strong>Kelas :</strong>{{murid.nama_ruang}}</p>
                      <hr>

                      <div class="form-group row">
                        <label for="efektif" class="col-sm-3 col-form-label">Efektif</label>
                        <div class="col-sm-2">
                          <input type="text" v-model="murid.efektif" class="form-control" id="efektif" name="efektif">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="komulatif" class="col-sm-3 col-form-label">Komulatif</label>
                        <div class="col-sm-2">
                          <input type="text" v-model="murid.komulatif" class="form-control" id="komulatif" name="komulatif">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="psikomotorik" class="col-sm-3 col-form-label">Psikomotorik</label>
                        <div class="col-sm-2">
                          <input type="text" v-model="murid.psikomotorik" class="form-control" id="psikomotorik" name="psikomotorik" >
                        </div>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary fcol-form-label">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Modal -->
        </td>
      </tbody>
    </table>
  </div>

</div>

<script type="text/javascript">
function sum() {
    var efektif = document.getElementById('efektif').value;
    var komulatif = document.getElementById('komulatif').value;
    var psikomotorik = document.getElementById('psikomotorik').value;
    var result = parseInt(efektif) + parseInt(komulatif) + parseInt(psikomotorik);
    if (!isNaN(result)) {
       document.getElementById('jumlah').value = result;
    }
}
</script>

<script type="text/javascript">
  const app = new Vue({
    el: '#app',
    data: {
      search: '',
      efektif: '',
      komulatif: '',
      psikomotorik: '',
      total: '',
      jumlah: '',
      modal: '',
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
      },
      filteredModal() {
        return this.nilai.filter(post => {
          return post.nis.toLowerCase().includes(this.modal.toLowerCase())
        })
      }
    }
  });

</script>
