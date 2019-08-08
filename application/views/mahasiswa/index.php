<div class="row">
  <div class="col-md-6">
    <a href="<?php echo base_url('mahasiswa/add'); ?>" class="btn btn-primary mb-2">
      Tambah Data Mahasiswa
    </a>

    <h3>Daftar Mahasiswa</h3>
      <?php foreach($students as $student) : ?>
        <ul class="list-group">
            <li class="list-group-item"><?php echo $student['nama']; ?></li>
        </ul>
      <?php endforeach; ?>
  </div>
</div>