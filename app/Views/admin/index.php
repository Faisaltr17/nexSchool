<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin NexSchool</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('/Admin/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('/Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet"
        href="<?= base_url('/Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('/Admin/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/AdminWebsite" class="nav-link">Beranda</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/logout" role="button">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside style="background-color: #151C48;" class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin/home" class="brand-link">
            <img src="<?= base_url('/images-src/logo1.png'); ?>" alt="NexSchool"
                class="brand-image img-circle elevation-3" style="background-color:white;">
            <span class="brand-text font-weight-light">NexSchool</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url('/Admin/dist/img/profile.jpg'); ?>" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="/admin/home" class="d-block">Admin <br>
                    Admin NexSchool</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                    <!-- <li class="nav-item ">
                        <a href="/dtsekolah" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Data Sekolah
                            </p>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="/admin/siswa" class="nav-link ">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Data Siswa Pendaftar
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="color: #151C48;">SELAMAT DATANG </h1><br>

                            <h2 style="color: #151C48;">ADMIN NexSchool <br></h2><br><br>


                            <h5 style="text-align: justify;">Penerimaan Peserta Didik Baru (PPDB) merupakan salah satu
                                kegiatan yang berpotensi tinggi untuk membuat masa berkumpul di tempat publik seperti
                                Sekolah ataupun Dinas Pendidikan. Untuk mendukung kebijakan pemerintah dan menghindari
                                potensi tersebut dengan dikeluarkannya SE Menteri Kemdikbud No.4 Tahun 2020.</h5>

                            <h5 style="text-align: justify;">Layanan SIAP PPDB Online adalah sebuah Sistem Layanan yang
                                dirancang untuk memfasilitasi otomasi pelaksanaan Penerimaan Peserta Didik Baru (PPDB),
                                dari proses pendaftaran, seleksi hingga pengumuman hasil seleksi berbasis waktu nyata
                                melalui Internet. Layanan ini disediakan menggunakan Teknologi Web dan Cloud Computing
                                (Komputasi Awan) yang dapat membantu sekolah dalam melaksanakan Layanan PPDB dengan
                                lebih mudah, cepat, transparan, akurat dan akuntabel secara Online di Internet.</h5>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->

            <!-- /.content-wrapper -->
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"></div>
            <strong>Copyright &copy; 2021 <a>NexSchool</a>.</strong>
            All rights reserved.
        </footer>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url('/Admin/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('/Admin/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/jszip/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('/Admin/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('/Admin/dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('/Admin/dist/js/demo.js'); ?>"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>