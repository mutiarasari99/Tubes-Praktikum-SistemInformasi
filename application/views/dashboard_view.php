<!-- header -->
<?php $this->load->view('template/header.php') ?>

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

   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col">
          
            <div class="jumbotron">
               <h2 class="display-4">SELAMAT DATANG</h2>
               <p class="lead">Sistem Informasi Pendataan Translator Webtoon</p>
               <hr class="my-4">
               <p class="lead">
                  <a class="btn btn-success btn-lg" href="<?= base_url("anggota/tambah") ?>" role="button">Tambah Data</a>
               </p>
            </div>
         </div>
      </div>
   </section>
   <!-- <div class="row text-light" id="welcome">
  <div class="col-6">
    <img src="<?= base_url(); ?>/assets/img/review/dashboardbaru.jpg" alt="" style="border-radius:20% ;">
  </div>
  <div class="col-6 mt-5">
    <h1>Pendataan Translator Webtoon</h1>
    <p>Web ini untuk mendata para Translator yang menerjemahkan berbagai macam webtoon luar negeri</p>
    <a href="<?= base_url(); ?>anggota" class="btn btn-success">Lihat Data</a>
  </div>
</div> -->
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- footer -->
<?php $this->load->view('template/footer.php') ?>