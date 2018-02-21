<h1><?php echo $title; ?></h1>
<br>
  <form method="POST" action="<?php echo base_url('dashboard/saveJadwalPelajaran'); ?>">
    <input type="text" class="form-control" id="id_jadwal" name="id_jadwal" value="<?php echo $id_jadwal; ?>" hidden>

    <div class="form-group row">
      <label for="nip" class="col-sm-2 col-form-label">Kelas</label>
      <div class="col-sm-4">
        <div class="form-group">
          <select class="form-control" id="id_kelas" name="id_kelas">
            <option value="0">--pilih kelas--</option>
            <?php foreach ($kelas as $data) : ?>
            <option value="<?php echo $data->id_kelas; ?>"><?php echo $data->nama_ruang; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="idmapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
      <div class="col-sm-4">
        <select class="form-control" id="id_mapel" name="id_mapel">
          <option value="0">--pilih Mata Pelajaran--</option>
          <?php foreach ($mapel as $data) : ?>
          <option value="<?php echo $data->id_mapel; ?>"><?php echo $data->nama_mapel; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="hari" class="col-sm-2 col-form-label">Hari</label>
      <div class="col-sm-4">
        <select class="form-control" id="hari" name="hari">
          <option value="0">--pilih Hari--</option>
          <option value="senin">senin</option>
          <option value="selasa">selasa</option>
          <option value="rabu">rabu</option>
          <option value="kamis">kamis</option>
          <option value="jumat">jumat</option>
          <option value="sabtu">sabtu</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="jam_pelajaran" class="col-sm-2 col-form-label">Jam Pelajaran</label>
      <div class="col-sm-4">
        <div class="form-group">
          <input type="text" class="form-control" id="jam_pelajaran" name="jam_pelajaran" value="<?php echo $jam_pelajaran; ?>">
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="id_guru" class="col-sm-2 col-form-label">Guru</label>
      <div class="col-sm-4">
        <select class="form-control" id="id_guru" name="id_guru">
          <option value="0">--pilih Guru--</option>
          <?php foreach ($guru as $data) : ?>
          <option value="<?php echo $data->id_guru; ?>"><?php echo $data->nama_guru; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary fcol-form-label">Simpan</button>
    </div>
  </form>
