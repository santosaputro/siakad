<h1><?php echo $title; ?></h1>
<br>
  <form method="POST" action="<?php echo base_url('dashboard/saveMapel'); ?>">
    <input type="text" class="form-control" id="id_mapel" name="id_mapel" value="<?php echo $id_mapel; ?>" hidden>

    <div class="form-group row">
      <label for="nama_mapel" class="col-sm-2 col-form-label">Nama Kelas</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" value="<?php echo $nama_mapel; ?>">
      </div>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary fcol-form-label">Simpan</button>
    </div>
  </form>
