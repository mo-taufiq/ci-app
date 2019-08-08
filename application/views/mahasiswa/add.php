<div class="row">
  <div class="col-md-6">
    <h1 class="mb-3">Tambah Data Mahasiswa</h1>
    <div class="card">
      <div class="card-header">
          Form Tambah Data Mahasiswa
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('mahasiswa/add'); ?>">
          <div class="form-group">
            <label for="name">Nama</label>
            <input value="<?php echo set_value('nama'); ?>" name="nama" type="text" class="form-control" id="name" placeholder="Masukkan nama">
            <?php if(form_error('nama')) : ?>
              <div class="alert-danger mt-2" style="height:30px;border-radius:5px;padding-left:13px;line-height: 30px;" role="alert">
                <small><?php echo form_error('nama'); ?></small>
              </div>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input value="<?php echo set_value('nrp'); ?>" name="nrp" type="text" class="form-control" id="nrp" placeholder="Masukkan NRP">
            <?php if(form_error('nrp')) : ?>
              <div class="alert-danger mt-2" style="height:30px;border-radius:5px;padding-left:13px;line-height: 30px;" role="alert">
                <small><?php echo form_error('nrp'); ?></small>
              </div>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input value="<?php echo set_value('email'); ?>" name="email" type="text" class="form-control" id="email" placeholder="Masukkan email">
            <?php if(form_error('email')) : ?>
              <div class="alert-danger mt-2" style="height:30px;border-radius:5px;padding-left:13px;line-height: 30px;" role="alert">
                <small><?php echo form_error('email'); ?></small>
              </div>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <?php foreach($jurusan as $jrsn) : ?>
                <option value="<?php if($jrsn === 'Pilih jurusan') { echo null; } else { echo $jrsn; } ?>"><?php echo $jrsn; ?></option>
              <?php endforeach; ?>
              <!-- <option value="">Pilih jurusan</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan</option>
              <option value="Teknik Instalasi Listrik">Teknik Instalasi Listrik</option>
              <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option> -->
            </select>
            <?php if(form_error('jurusan')) : ?>
              <div class="alert-danger mt-2" style="height:30px;border-radius:5px;padding-left:13px;line-height: 30px;" role="alert">
                <small><?php echo form_error('jurusan'); ?></small>
              </div>
            <?php endif; ?>
          </div>
          <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-warning float-left">Kembali</a>
          <button type="submit" class="btn btn-success float-right">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>