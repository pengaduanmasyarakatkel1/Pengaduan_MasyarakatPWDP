<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PENGADUAN MASYARAKAT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi PeMa</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
               <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Akun
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="Login.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Register.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
</ul>
               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="MTambah.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Pengaduan</p>
                </a>
              </li>
              <li class="nav-item">
</ul>
              <li class="nav-item menu-open">
               <a href="Logout.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                Logout
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Pengaduan Masyarakat</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              Selamat datang di Aplikasi Pengaduan Masyarakat
           </div>
           <?php 
include('Koneksi.php');
$sqlPengaduan=mysqli_query($kon,"SELECT
        pengaduan.id_pengaduan,pengaduan.tgl_pengaduan,pengaduan.nik,pengaduan.isi_laporan,pengaduan.foto,pengaduan.status,
        tanggapan.tanggapan,tanggapan.id_petugas
        FROM pengaduan JOIN
        tanggapan ON
        tanggapan.id_pengaduan=pengaduan.id_pengaduan
        WHERE pengaduan.id_pengaduan ORDER BY tgl_pengaduan ASC");
?>
              <div class="card-header">
              <h3 class="card-title">Pengaduan</h3>
              <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text"  class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default" name="table_search">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
                </div>
</div>
</div>
</div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
    <tr>
    <th>Id Pengaduan</th>
                    <th>Tgl Pengaduan</th>
                    <th>NIK</th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Tanggapan</th>
                    <th>Id Petugas</th>
        </tr>
</thead>
<?php
     while($data = mysqli_fetch_array($sqlPengaduan, MYSQLI_ASSOC)){
    echo '<tr>
        <td>'.$data['id_pengaduan'].'</td>
        <td>'.$data['tgl_pengaduan'].'</td>
        <td>'.$data['nik'].'</td>
        <td>'.$data['isi_laporan'].'</td>
        <td><img src="images/'.$data['foto'].'" width="100" height ="100"></td>
        <td>'.$data['status'].'</td>
        <td>'.$data['tanggapan'].'</td>
        <td>'.$data['id_petugas'].'</td>
        </tr>';
      }
      ?>
      </div>
    </table>
    </div>
      </div>
    </div>
       </div>
          </div>
          <!-- /.col-md-6 -->
    </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      XI RPL 1
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="#">Kelompok 1</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="template/dist/js/adminlte.min.js"></script>
</body>
</html>
