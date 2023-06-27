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
   <!-- main -->
   
<?php if ($this->session->flashdata('flash')): ?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Anggota <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
        </div>
    </div>
</div>
<?php endif; ?>

<div class="container-fluid">
	<!-- <button class="btn btn-md btn-primary mb-3" ><i class="fas fa-plus fa-sm"></i> Tambah Data Anggota</button> -->
   <a href="<?= base_url('anggota/tambah'); ?>" class="btn btn-md btn-primary mb-3 text-light">Tambah Data Anggota</a>
<!-- Tombol Cetak  -->
   <a class="btn btn-md btn-secondary mb-3" href="<?= base_url('laporan'); ?>"><i class="fas fa-print"></i> Cetak</a>





<!-- <div class="row mt-3">
    <div class="col-md-5">
        <a href="<?= base_url('anggota/tambah'); ?>" class="btn btn-success text-light">Tambah Data Anggota</a>
    </div>
    <div class="">
   <a href="<?= base_url('laporan'); ?>" type="submit" class="btn btn-primary "><img src="<?= base_url() ?>assets/img/printer.svg" alt=""></a>
   </div> -->

    <!-- <div class="col-7">
    <a href="<?= base_url('login/logout'); ?>" class="btn btn-danger text-light float-right">Logout</a>
    </div> -->
    
<!-- </div> -->
<div class="row mt-3">
   <div class="col-md-5">
      <form action="<?= base_url('anggota'); ?>" method="post" class="">
         <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Cari anggota..." autocomplete="off" autofocus name="keyword">
         <input class="btn btn-success text-light" type="submit" name="submit"></input>
         </div>
         
      </form>
   </div>
   <!-- <div class="col-7">
   <a href="<?= base_url('laporan'); ?>" type="submit" class="btn btn-primary float-right"><img src="<?= base_url() ?>assets/img/printer.svg" alt=""></a>
   </div> -->
</div>

                  <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                        <tr>
                           <th>No</th>
                           <th>Kode</th>
                           <th>Nama</th>
                           <th>Email</th>
                           <th>No Hp</th>
                           <th>Kemampuan Bahasa</th>
                           <th>Alamat</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     <!-- klo data teada -->
                     <?php if(empty($anggota)): ?>
                        <tr>
                           <td colspan="7">
                           <div class="alert alert-danger" role="alert">
                          Data tidak ditemukan
                           </div>
                           </td>
                        </tr>
                     <?php endif; ?>
                        <?php
                        $no = 0; 
                        foreach ($anggota as $agt) { ?>
                           <tr>
                              <td><?= ++$start; ?></td>
                              <td><?= $agt['kode_anggota']?></td>
                              <td><?= $agt['nama']; ?></td>
                              <td><?= $agt['email']; ?></td>
                              <td><?= $agt['no_hp']; ?></td>
                              <td><?= $agt['kemampuan_bahasa']; ?></td>
                              <td><?= $agt['alamat']; ?></td>
                              <!-- <td>
                                 <a href="<?= base_url('anggota/ubah/' . $agt['id']); ?>" class="badge bg-success text-light"> Edit</a>
                                 <a href="<?= base_url('anggota/hapus/' . $agt['id']); ?>" class="badge bg-danger text-light">Delete</a>
                              </td> -->
                              <td>  
                                    <a href="<?= base_url('anggota/ubah/' . $agt['id']); ?>" class="btn btn-warning text-white"><img src="<?= base_url() ?>assets/img/edit.svg" alt=""></a>
                                    
                                    <a href="<?= base_url('anggota/hapus/' . $agt['id']); ?>" class="btn btn-danger"><img src="<?= base_url() ?>assets/img/x.svg" alt=""></a>
                              </td>
                              
                           </tr>
                        <?php } ?>
                     </tbody>
                  </table>
                  <?= $this->pagination->create_links(); ?>
               </div>
               
</div>
</div>
   <!-- akhir -->

</div>

<?php $this->load->view('template/footer'); ?>