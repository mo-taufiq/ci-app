<div class="row">
  <div class="col-md-6">
  <?php if($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data mahasiswa <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif;?>
    <a href="<?php echo base_url('mahasiswa/add'); ?>" class="btn btn-primary mb-2">
      Tambah Data Mahasiswa
    </a>

    <!-- <div class="row"> -->
      <!-- <div class="col-md-6"> -->
        <form action="" method="post">
          <div class="input-group mb-2 mt-2">
            <input type="text" class="form-control" placeholder="Cari data mahasiswa..." name="keyword">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">Button</button>
            </div>
          </div>
        </form>
      <!-- </div> -->
    <!-- </div> -->

    <h3>Daftar Mahasiswa</h3>
      <?php if(empty($students)) : ?>
        <div class="alert alert-warning" role="alert">
          Data mahasiswa tidak di temukan atau belum ada.
        </div>
      <?php else : ?>
        <?php foreach($students as $student) : ?>
          <ul class="list-group">
              <li class="list-group-item">
                <?php echo $student['nama']; ?>
                <a onclick="return confirm('yakin?');" href="<?php echo base_url('mahasiswa/delete/' . $student['id']); ?>" class="badge badge-danger float-right ml-2">Hapus</a>
                <a href="<?php echo base_url('mahasiswa/edit/' . $student['id']); ?>" class="badge badge-success float-right ml-2">Edit</a>
                <a href="<?php echo base_url('mahasiswa/detail/' . $student['id']); ?>" class="badge badge-primary float-right">Detail</a>
              </li>
          </ul>
        <?php endforeach; ?>
      <?php endif;?>
  </div>
</div>