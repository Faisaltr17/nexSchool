<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title')?></title>
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
    <style>
        .navbar ul li .active,
        .navbar ul li .nav-link:active,
        .navbar ul li .nav-link:focus,
        .navbar ul li .nav-link:hover
         {
            color: #0095ce;
        }
    </style>
    <!-- CSS File -->
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between py-3">
                <div class="logo">
                    <a href="/"><img src="images-src/logo.png" alt="" class="img log"></a>
                </div>
                <div class="nama">
                    <a href="/">
                        <label>Pendaftaran Sekolah Negeri</label><br>
                        <label>Kota Malang</label></a>
                </div>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto <?= ($title == 'home') ? 'active' : ''; ?>" href="/">Home</a></li>
                        <li><a class="nav-link scrollto" href="/pendaftaran">Pendaftaran</a></li>
                        <li><a class="nav-link scrollto <?= ($title == 'pendaftar') ? 'active' : ''; ?>" href="/pendaftar">Data Pendaftar</a></li>
                        <li><a class="nav-link scrollto <?= ($title == 'hasil') ? 'active' : ''; ?>" href="/hasil">Hasil Seleksi</a></li>
                        <li><a class="nav-link scrollto <?= ($title == 'sekolah') ? 'active' : ''; ?>" href="/sekolah">Data Sekolah</a></li>
                        <?php $session = session();
                        if($session->has('id_akun')) { ?>
                                <li><a class="getstarted scrollto" style="background-color: #151C48" href="/logout">LOG OUT</a></li>
                            <?php } else { ?>
                                <li><a class="getstarted scrollto" style="background-color: #151C48" href="/login">LOG IN</a></li>
                        <?php }?>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <?= $this->renderSection('konten')?>
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
                            <p>&copy; <a href="#" target="_self" style="color: #0095ce;">2021 NexSchool </a>| All rights reserved. </p>
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

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>
    <script src="<?= base_url(); ?>/assets/js/script.js"></script>

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- SCRIPT AOS TAMBAHAN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>