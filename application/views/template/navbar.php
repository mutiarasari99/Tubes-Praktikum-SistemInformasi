<div class="wrapper">
   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
         <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
         </li>
      </ul>
   </nav>

   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#285430 ;">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
         <img src="<?= base_url() ?>assets/template/dist/img/group.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light-bold">DATA TRANSLATOR</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
         <!-- Sidebar user (optional) -->
       

         <!-- Sidebar Menu -->
         <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               </li>
               <?php if($this->session->userdata('username')): ?>

               <li class="nav-item">
                  <a href="<?= base_url("dashboard") ?>" class="nav-link">
                     <i class="nav-icon fas fa-home"></i>
                     <p>
                        BERANDA
                     </p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?= base_url("anggota") ?>" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                     <p>
                        DATA ANGGOTA
                     </p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?= base_url('login/logout') ?>" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                     <p>LOGOUT</p>
               </a>
               </li>

               <?php else: ?>
                  <li class="nav-item">
                  <a href="<?= base_url("dashboard") ?>" class="nav-link">
                     <i class="nav-icon fas fa-home"></i>
                     <p>
                        BERANDA
                     </p>
                  </a>
               </li>
               <!-- <li class="nav-item">
                  <a href="<?= base_url("anggota") ?>" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                     <p>
                        DATA ANGGOTA
                     </p>
                  </a>
               </li> -->

               <li class="nav-item">
                  <a href="<?= base_url() ?>login" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  
                     <p>
                        LOGIN ADMIN
                     </p>
                  </a>
               </li>
               <?php endif; ?>
            </ul>
         </nav>
         <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
   </aside>