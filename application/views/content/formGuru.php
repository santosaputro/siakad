<h1><?php echo $title; ?></h1>
<br>
  <form method="POST" action="<?php echo base_url('dashboard/saveGuru'); ?>">
    <input type="text" class="form-control" id="id_guru" name="id_guru" value="<?php echo $id_guru; ?>" hidden>

    <div class="form-group row">
      <label for="nip" class="col-sm-2 col-form-label">NIP</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $nip; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="nama_guru" class="col-sm-2 col-form-label">Nama Guru</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $nama_guru; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="wali_kelas" class="col-sm-2 col-form-label">Wali Kelas</label>
      <div class="col-sm-4">
        <div class="form-group">
          <select class="form-control" id="wali_kelas" name="wali_kelas">
            <option value="0">--pilih kelas--</option>
            <?php foreach ($kelas as $data) : ?>
            <option value="<?php echo $data->nama_ruang; ?>"><?php echo $data->nama_ruang; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="foto" class="col-sm-2 col-form-label">Foto</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="foto" name="foto" value="<?php echo $foto; ?>">
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
