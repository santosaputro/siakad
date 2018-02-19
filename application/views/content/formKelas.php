<h1><?php echo $title; ?></h1>
<br>
  <form method="POST" action="<?php echo base_url('dashboard/saveKelas'); ?>">
    <input type="text" class="form-control" id="id_kelas" name="id_kelas" value="<?php echo $id_kelas; ?>" hidden>

    <div class="form-group row">
      <label for="nama_ruang" class="col-sm-2 col-form-label">Nama Kelas</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="nama_ruang" name="nama_ruang" value="<?php echo $nama_ruang; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="kkapasitas_ruang" class="col-sm-2 col-form-label">Jumlah Siswa</label>
      <div class="col-sm-1">
        <input type="text" class="form-control" id="kapasitas_ruang" name="kapasitas_ruang" value="<?php echo $kapasitas_ruang; ?>">
      </div>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary fcol-form-label">Simpan</button>
    </div>
  </form>
