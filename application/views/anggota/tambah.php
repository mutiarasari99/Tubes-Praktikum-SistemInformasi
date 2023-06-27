<?php $this->load->view('template/header'); ?>

<!-- navbar -->
<?php $this->load->view('template/navbar.php') ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
         </div>
      </div><!-- /.container-fluid -->
   </section>
<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">Form Tambah Data Anggota</div>
            <div class="card-body">
            <form action="" method="POST">
            <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input type="text" readonly class="form-control" id="kode" name="kode_anggota" value="<?php echo $kode; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <div class="form-text text-danger"><?= form_error('nama'); ?></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
                <div class="form-text text-danger"><?= form_error('email'); ?></div>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp">
                <div class="form-text text-danger"><?= form_error('no_hp'); ?></div>
            </div>
            <div class="mb-3">
                <label for="kemampuan_bahasa" class="form-label">Kemampuan Bahasa</label>
                <input type="text" class="form-control" id="kemampuan_bahasa" name="kemampuan_bahasa">
                <div class="form-text text-danger"><?= form_error('kemampuan_bahasa'); ?></div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
                <div class="form-text text-danger"><?= form_error('alamat'); ?></div>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
            </form>
            </div>
            </div>
        </div>
    </div>

</div>
</div>
<?php $this->load->view('template/footer'); ?>