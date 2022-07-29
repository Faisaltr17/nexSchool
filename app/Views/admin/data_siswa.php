<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Data Siswa</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('/Admin/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('/Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
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
                <a href="/admin/home" class="nav-link">Beranda</a>
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
            <img src="<?= base_url('/images-src/logo1.png'); ?>" alt="NexSchool" class="brand-image img-circle elevation-3" style="background-color:white;">
            <span class="brand-text font-weight-light">NexSchool</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url('/Admin/dist/img/profile.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="/admin/home" class="d-block">Admin <br>
                        Admin NexSchool</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                            <h1>Daftar Siswa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin/home">Beranda</a></li>
                                <li class="breadcrumb-item active">Siswa</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Siswa</th>
                                                <th>Nama</th>
                                                <th>Asal Sekolah Siswa</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($siswa as $s) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $s->id_siswa; ?></td>
                                                    <td><?= $s->nama_lengkap; ?></td>
                                                    <td><?= $s->asal_sekolah; ?></td>
                                                    <td><?= $s->status; ?></td>
                                                    <td>
                                                        <?php if ($s->status == "Belum Diverifikasi") { ?>
                                                            <button type="button" data-target="#verifModal" data-toggle="modal" class="btn btn-success btn-sm btn-verif" data-id="<?= $s->id_siswa; ?>">Verifikasi</button>
                                                            <button type="submit" name="button-" class="btn btn-primary btn-sm btn-edit" data-toggle="modal" data-target="#editmodal" data-id="<?= $s->id_siswa; ?>" data-name="<?= $s->nama_lengkap; ?>" data-asal="<?= $s->asal_sekolah; ?>">Edit</button>
                                                            <button type="button" data-target="#deleteModal" data-toggle="modal" class="btn btn-danger btn-sm btn-delete" data-id="<?= $s->id_siswa; ?>">Delete</button>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Modal Edit Siswa-->
                                <form action="/admin/siswa/update" method="post">
                                    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>ID Siswa</label>
                                                        <input type="text" class="form-control id_siswa" name="id_siswa" placeholder="ID Siswa" value="" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Lengkap</label>
                                                        <input type="text" class="form-control nama_lengkap" name="nama_lengkap" placeholder="Nama Siswa" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Asal Sekolah Siswa</label>
                                                        <input type="text" class="form-control asal_sekolah" name="asal_sekolah" placeholder="Asal Siswa" value="">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="id_siswa" class="id_siswa">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Modal Edit Siswa-->
                                <!-- Modal Delete Siswa-->
                                <form action="/admin/siswa/delete" method="post">
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Siswa</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Apakah anda yakin untuk menghapus siswa ini?</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="id_siswa" class="id_siswa" value="">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-primary">Yes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Modal Delete Siswa-->
                                <!-- Modal Verifikasi Siswa-->
                                <form action="/admin/siswa/verif" method="post">
                                    <div class="modal fade" id="verifModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Verifikasi Siswa</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Apakah anda yakin untuk verifikasi siswa ini?</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="id_siswa" class="id_siswa" value="">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-primary">Yes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Modal Verifikasi Siswa-->
                            </div>
                            <!-- /.card-body -->
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
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
        $(document).ready(function() {
            // get Edit Admin
            $('.btn-edit').on('click', function() {
                const id_siswa = $(this).data('id');
                const nama_lengkap = $(this).data('name');
                const asal_sekolah = $(this).data('asal');
                $('.id_siswa').val(id_siswa);
                $('.nama_lengkap').val(nama_lengkap);
                $('.asal_sekolah').val(asal_sekolah);
                $('#editmodal').modal('show');
            });

            // get Delete Admin
            $('.btn-delete').on('click', function() {
                const id = $(this).data('id');
                $('.id_siswa').val(id);
                $('#deleteModal').modal('show');
            });

            // get Verif Admin
            $('.btn-verif').on('click', function() {
                const id = $(this).data('id');
                $('.id_siswa').val(id);
                $('#verifModal').modal('show');
            });

        });
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