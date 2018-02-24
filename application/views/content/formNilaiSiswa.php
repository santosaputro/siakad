<h1><?php echo $title; ?></h1>
<br>
  <form method="POST" action="<?php echo base_url('dashboard/saveKelas'); ?>">
    <input type="text" class="form-control" id="id_nilai" name="id_nilai" value="<?php echo $id_nilai; ?>">
    <h2>Nilai</h2>
    <div class="form-group row">
      <label for="efektif" class="col-sm-2 col-form-label">Efektif</label>
      <div class="col-sm-2">
        <input type="text" v-model.nu="efektif" class="form-control" id="efektif" name="efektif" value="<?php echo $efektif; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="komulatif" class="col-sm-2 col-form-label">Komulatif</label>
      <div class="col-sm-2">
        <input type="text" v-model.nu="efektif" class="form-control" id="komulatif" name="komulatif" value="<?php echo $komulatif; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="psikomotorik" class="col-sm-2 col-form-label">Psikomotorik</label>
      <div class="col-sm-2">
        <input type="text" v-model.nu="psikomotorik" class="form-control" id="psikomotorik" name="psikomotorik" value="<?php echo $psikomotorik; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Nilai</label>
      <div class="col-sm-1">
        <input type="text" name="total" v-model.nu="total">
        <input type="text" v-model.nu="jumlah" class="form-control" id="jumlah" name="jumlah" value="<?php echo $jumlah; ?>">
        <br>

      </div>
    </div>
    {{ jumlahNilai }}
    <div class="form-group">
      <button type="submit" class="btn btn-primary fcol-form-label">Simpan</button>
    </div>
  </form>

<script type="text/javascript">
var calculator = new Vue({
  el: '#calculator',
  data: {
      efektif: '',
      komulatif: '',
      psikomotorik: '',
      total: '',
      jumlah: ''
  },
  computed: {
      jumlahNilai: function(e){
          total = this.efektif + this.komulatif + this.psikomotorik;
      }
  }

});


//https://blog.tompawlak.org/number-currency-formatting-javascript
function currencyFormat (num) {
  return "$" + num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}
</script>
