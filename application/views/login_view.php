<?php $this->load->view('template/header') ?>

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
<!-- session untuk validasinya -->


  <div class="container mt-5">
  <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center"><h3>Login</h3></div>
           
            <?php if ($this->session->flashdata('info')): ?>
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    <?= $this->session->flashdata('info'); ?>
                    </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('pesan')): ?>
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <?= $this->session->flashdata('pesan'); ?>
                    </div>
            <?php endif; ?>
          <div class="card-body">
            <form action="<?php echo site_url('login/ceklogin') ?>" method="POST">
            
            

            <div class="form-group mt-3">
              <label for="username">Username</label>
              <input type="username" class="form-control" id="username" name="username">
            
            </div>
            <div class="form-group mt-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-success mt-3">Submit</button>
          </form>
          </div>
        </div>
      </div>
  </div>
  </div>
</div>
  <?php $this->load->view('template/footer') ?>