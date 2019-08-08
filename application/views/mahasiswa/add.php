<div class="row">
  <div class="col-md-6">
    <h1 class="mb-3">Tambah Data Mahasiswa</h1>
    <div class="card">
      <div class="card-body">
        <form action="post" action="<?php echo base_url(); ?>">
          <div class="form-group">
            <label for="name">Nama</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Masukkan nama">
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input name="nrp" type="text" class="form-control" id="nrp" placeholder="Masukkan NRP">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan">
              <option value="">Pilih jurusan</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan</option>
              <option value="Teknik Instalasi Listrik">Teknik Instalasi Listrik</option>
              <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
            </select>
          </div>
          <a href="#" class="btn btn-warning float-left">Kembali</a>
          <button type="submit" class="btn btn-success float-right">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>