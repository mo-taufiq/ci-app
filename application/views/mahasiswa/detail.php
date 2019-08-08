<div class="row">
    <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Detail Data Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $student['nama']; ?></h5>
                <p class="card-text"><?php echo $student['nrp']; ?></p>
                <p class="card-text"><?php echo $student['email']; ?></p>
                <p class="card-text"><?php echo $student['jurusan']; ?></p>
                <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-warning">Kembali</a>
            </div>
        </div>

    </div>
</div>