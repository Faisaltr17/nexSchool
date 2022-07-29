<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>FORMULIR PENDAFTARAN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/assets/css/style1.css" rel="stylesheet">
    <style>
        .navbar ul li .active,
        .navbar ul li .nav-link:active,
        .navbar ul li .nav-link:focus,
        .navbar ul li .nav-link:hover {
            color: #0095ce;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class=" fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <a href="/"><img src="/images-src/logo.png" alt="" class="img log"></a>
                </div>
                <div class="nama">
                    <a href="/">
                        <label>Pendaftaran Sekolah Negeri</label><br>
                        <label>Kota Malang</label></a>
                </div>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="/">Home</a>
                        </li>
                        <li><a class="nav-link scrollto active" href="/pendaftaran">Pendaftaran</a></li>
                        <li><a class="nav-link scrollto" href="/pendaftar">Data Pendaftar</a></li>
                        <li><a class="nav-link scrollto" href="/hasil">Hasil
                                Seleksi</a></li>
                        <li><a class="nav-link scrollto" href="/sekolah">Data Sekolah</a></li>
                        <?php $session = session();
                        if ($session->has('id_akun')) { ?>
                            <li><a class="getstarted scrollto" style="background-color: #151C48" href="/logout">LOG OUT</a></li>
                        <?php } else { ?>
                            <li><a class="getstarted scrollto" style="background-color: #151C48" href="/login">LOG IN</a></li>
                        <?php } ?>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div><!-- End Header Container -->
        </div>
        <!-- <p style="float: left;">siswa</p> -->
    </header><!-- End Header -->
    <main id="main">
        <!-- ======= FORM ======= -->
        <section>
            <h3 style="text-align: center;" id="formp">FORMULIR PENDAFTARAN</h3><br>
            <div class="ava" style=" width: 20%; height: 500px; float: left; margin-left: 100px; margin-right: -70px;">
                <img src="https://i.postimg.cc/3J2prgXn/SMA1.png">
            </div>
            <div class="container formulir">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="siswa-tab" data-toggle="tab" href="#siswa" role="tab" aria-controls="siswa" aria-selected="true">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sekolah-tab" data-toggle="tab" href="#sekolah" role="tab" aria-controls="sekolah" aria-selected="false">Data Sekolah Asal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ortu-tab" data-toggle="tab" href="#ortu" role="tab" aria-controls="ortu" aria-selected="false">Data Orangtua/Wali</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nilai-tab" data-toggle="tab" href="#nilai" role="tab" aria-controls="nilai" aria-selected="false">Data Nilai</a>
                    </li>
                </ul>

                <!--Panel siswa-->
                <form action="/pendaftaran/proses" method="post">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="siswa" role="tabpanel" aria-labelledby="siswa-tab">
                            <div class="form-group d-flex flex-column">
                                <div class="form-group">
                                    <label for="form-control-file"><br>Foto Diri</label>
                                    <input type="file" required name="gambar" class="form-control-file" id="FormControlFile1">
                                </div>
                                <div class="form-group">
                                    <label for="namaSiswa">Nama Lengkap</label>
                                    <input type="text" required name="nama_lengkap" class="form-control" id="namaSiswa" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input id="numbersOnly" required name="nisn" pattern="[0-9.]+" type="text" class="form-control" id="nisn" placeholder="NISN" />
                                </div>
                                <div class="form-group">
                                    <label for="jalur">Jalur Pendaftaran</label>
                                    <select class="form-control" id="Select1" required name="jalur_masuk">
                                        <option>--</option>
                                        <option>Reguler</option>
                                        <option>Prestasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pil1">Pilihan 1</label>
                                    <select class="form-control" id="Select2" required name="pilihan_1">
                                        <option value="">--</option>
                                        <?php foreach ($sekolah as $s) : ?>
                                            <option value="<?= $s['id_sekolah']; ?>"><?= $s['nama_sekolah']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pil2">Pilihan 2</label>
                                    <select class="form-control" id="Select3" required name="pilihan_2">
                                        <option>--</option>
                                        <?php foreach ($sekolah as $s) : ?>
                                            <option value="<?= $s['id_sekolah']; ?>"><?= $s['nama_sekolah']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Jenis Kelamin</label>
                                    <select class="form-control" id="Select4" required name="jenis_kelamin">
                                        <option>--</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select class="form-control" id="Select5" required name="agama">
                                        <option>--</option>
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tempat">Tempat Lahir</label>
                                    <input type="text" class="form-control" required name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" />
                                </div>
                                <div class="form-group">
                                    <label for="tgl">Tanggal Lahir</label> <br>
                                    <input type="date" required name="tanggal_lahir" id="date_timepicker_end">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Rumah</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Alamat Sekolah" required name="alamat" />
                                </div>
                                <div class="form-group">
                                    <label for="hp">No. Handphone</label>
                                    <input type="text" required name="no_hp" class="form-control" id="hp" placeholder="No. Handphone" />
                                </div>
                            </div>

                            <div class="input-group mb-3 group-end" style="margin-left: 230px;">
                                <a class="btn btn-primary btnNext" href="#main">Next</a>
                            </div>
                        </div>
                        <!-- </form> -->
                        <!--/. form element wrap -->

                        <!--Panel Sekolah-->

                        <div class="tab-pane fade" id="sekolah" role="tabpanel" aria-labelledby="sekolah-tab">
                            <div class="form-group d-flex flex-column">
                                <div class="form-group">
                                    <label for="namaSekolah"><br>Nama Sekolah Asal</label>
                                    <input type="text" class="form-control" required name="asal_sekolah" id="namaSekolah" placeholder="Nama Sekolah Asal" />
                                </div>
                                <div class="form-group">
                                    <label for="AlamatSekolah">Alamat Sekolah Asal</label>
                                    <input type="text" class="form-control" required name="alamat_sekolah_asal" id="AlamatSekolah" placeholder="Alamat Sekolah Asal" />
                                </div>
                            </div>

                            <div class="input-group mb-3 group-end" style="margin-left: 230px;">
                                <a class="btn btn-secondary btnPrevious">Previous</a>
                                <a class="btn btn-primary btnNext" href="#main">Next</a>
                            </div>
                            <!--/. form element wrap -->

                            <!--Panel ortu-->
                        </div>
                        <div class="tab-pane fade" id="ortu" role="tabpanel" aria-labelledby="ortu-tab">
                            <div class="form-group d-flex flex-column">
                                <div class="form-group">
                                    <label for="NamaOrangtua"><br>Nama Orangtua/Wali</label>
                                    <input type="text" required name="nama_ortu" class="form-control" id="namaOrangtua" placeholder="Nama Orangtua/Wali" />
                                </div>
                                <div class="form-group">
                                    <label for="almt">Alamat Rumah Orangtua/Wali</label>
                                    <input type="text" required name="alamat_ortu" class="form-control" id="almt" placeholder="Alamat Rumah Orangtua/Wali" />
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan Orangtua/Wali</label>
                                    <input type="text" required name="pekerjaan_ortu" class="form-control" id="pekerjaan" placeholder="Pekerjaan Orangtua/Wali" />
                                </div>
                                <div class="form-group">
                                    <label for="Nomor">No. Handphone Orangtua/Wali</label>
                                    <input type="text" required name="no_hp_ortu" class="form-control" id="Nomor" placeholder="No. Handphone Orangtua/Wali" />
                                </div>
                            </div>

                            <div class="input-group mb-3 group-end" style="margin-left: 230px;">
                                <a class="btn btn-secondary btnPrevious">Previous</a>
                                <a class="btn btn-primary btnNext" href="#main">Next</a>
                            </div>
                            <!--/. form element wrap -->

                            <!--panel nilai-->
                        </div>
                        <div class="tab-pane fade" id="nilai" role="tabpanel" aria-labelledby="nilai-tab">
                            <div class="form-group d-flex flex-column">
                                <div class="form-group">
                                    <label for="NEM"><br>NEM</label>
                                    <input type="text" required name="nem" class="form-control" id="NEM" placeholder="NEM" />
                                </div>
                                <div class="form-group">
                                    <label for="penghargaan">Penghargaan</label>
                                    <div class="input_fields_wrap">
                                        <button class="add_field_button">Add More</button>
                                        <input style="margin-top: 15px;" type="text" class="form-control" required name="mytext[]"><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="form-control-file">Bukti Dokumen</label>
                                    <input type="file" required name="bukti_dokumen" class="form-control-file" id="FormControlFile2"> <br>
                                    <small id="tglHelp" class="form-text text-muted">dijadikan satu dalam bentuk
                                        .pdf.</small>
                                </div>
                            </div>

                            <div class="input-group mb-3 group-end" style="margin-left: 230px;">
                                <a class="btn btn-secondary btnPrevious">Previous</a>
                                <input type="submit" value="Submit" class="btn btn-success btnNext">
                            </div>
                            <!--/. form element wrap -->
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- ======= Footer ======= -->
    <section id="footer">
        <footer cellspacing="0">

            <div class="footer-top">
                <div class="container-fluid">

                    <div class="row">
                        <div class="sosmed">
                            <h4 class="hubungi">&nbsp;HUBUNGI KAMI</h4>
                            <a href="#" target="_blank"><img id="fb" src="https://www.freepnglogos.com/uploads/facebook-logo-14.png"></a>
                            <a href="#" target="_blank"><img id="tw" src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png"></a>
                            <a href="#" target="_blank"><img id="ig" src="https://i.ibb.co/48DZnKd/instagram.png"></a>
                        </div>
                    </div>

                    <div class="row " id="lastfooter">
                        <div class="col-sm-12">
                            <p>&copy; <a href="#" target="_self" style="color: #0095ce;">2021 daftar.in </a>| All rights reserved. </p>
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </footer><!-- End Footer -->
    </section>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>
    <script src="<?= base_url(); ?>/assets/js/script.js"></script>
    <script src="<?= base_url(); ?>/assets/js/script2.js"></script>
    <!-- JS Coba -->
    <script src="assets/js/jquery"></script>

</body>

</html>