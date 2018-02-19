<h1><?php echo $title; ?></h1>
<br>
  <form method="POST" action="<?php echo base_url('dashboard/saveSiswa'); ?>">
    <input type="text" class="form-control" id="id_siswa" name="id_siswa" value="<?php echo $id_siswa; ?>" hidden>

    <div class="form-group row">
      <label for="nis" class="col-sm-2 col-form-label">NIS</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $nis; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?php echo $nama_siswa; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
      <div class="col-sm-4">
        <!-- <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $kelas; ?>"> -->
        <div class="form-group">
          <select class="form-control" id="kelas" name="kelas">
            <option>--pilih kelas--</option>
            <?php foreach ($kelas as $data) : ?>
            <option value="<?php echo $data->nama_ruang; ?>"><?php echo $data->nama_ruang; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>">
      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary fcol-form-label">Simpan</button>
    </div>
  </form>
