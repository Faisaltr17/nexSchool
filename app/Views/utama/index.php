<?= $this->extend('utama/layout')?>
<?= $this->section('title')?>
    Halaman Utama
<?= $this->endSection()?>
<?= $this->section('konten')?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>Selamat datang angkatan 2022/2023</h1>
            <h2>pendaftaran dibuka pada (09/07/2022)</h2>
            <a href="#sekolah" class="btn-get-started scrollto">MULAI DAFTAR</a>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= About Section ======= -->
        <section class="about sekolah" id="sekolah">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" data-aos="" data-aos-delay="100">
                    <?php if (session()->getFlashdata('msg')) : ?>
                        <div style="color: red; margin-bottom:5%; margin-top:5%;" class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                    <?php endif; ?>
                        <div class="icon-box">
                            <a href="/pendaftaran">
                                <img src="https://i.postimg.cc/3J2prgXn/SMA1.png" alt=""><br><br><br>
                                <h2>SMA</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts" style="background-color: #151C48">
            <div class="container" id="about">
                <div class="row counters">
                    <div class="col-lg-12 text-center">
                        <h2>Jumlah Pendaftar</h2>
                    </div><br>
                    <div class="col-lg-4 col-6 text-center">
                    </div>
                    <div class="col-lg-4 col-6 text-center">
                        <span ><?= count($pendaftar);?></span>
                        <p>SMA</p>
                    </div>
                    <div class="col-lg-4 col-6 text-center">
                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->

        <!-- ======= ALUR PENDAFTARAN ======= -->
        <section id="why-us" class="why-us">
            <div class="container" style="background-color: #151C48">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch kotak" data-aos="fade-right">
                        <div class="content" style="background-color: #151C48">
                            <h3>Mengapa memilih sekolah negeri?</h3>
                            <p>
                                Sekolah negeri merupakan pilihan tepat untuk Kamu yang ingin melanjutkan pendidikan dengan biaya terjangkau. Lagi pula banyak sekolah negeri yang memiliki reputasi bagus dalam
                                mendidik siswa menjadi generasi yang berprestasi. Buat Kamu yang masih ragu menentukan sekolah terbaik, wajib mengetahui alasan memilih sekolah negeri dibandingkan sekolah swasta.</p>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="zoom-in">
                        <img src="https://i.postimg.cc/L86kYXBc/sss.png" alt="">
                    </div>
                </div>
        </section><!-- AKHIR ALUR PENDAFTARAN -->

        <!-- ======= AWAL TENTANG KAMI ======= -->
        <section id="cta" class="cta">
            <div class="container">
                <div class="row baris my-5">
                    <div class="col-sm-3 text-center ">
                        <img class="img-thumbnail" src="data:image/png;base64,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" alt="">
                    </div>
                    <div class="col-sm-9 " style="text-align: justify" data-aos="zoom-in">
                        <h3 class="tk">TENTANG KAMI</h3>
                        <p>Penerimaan Peserta Didik Baru (PPDB) merupakan salah satu kegiatan yang berpotensi tinggi untuk membuat masa berkumpul di tempat publik seperti Sekolah ataupun Dinas Pendidikan.
                            Untuk mendukung kebijakan pemerintah dan menghindari potensi tersebut dengan dikeluarkannya SE Menteri Kemdikbud No.4 Tahun 2020.</p>
                        <p>Layanan SIAP PPDB Online adalah sebuah Sistem Layanan yang dirancang untuk memfasilitasi otomasi pelaksanaan Penerimaan Peserta Didik Baru (PPDB), dari proses pendaftaran, seleksi hingga pengumuman hasil seleksi berbasis waktu nyata melalui Internet.
                            Layanan ini disediakan menggunakan Teknologi Web dan Cloud Computing (Komputasi Awan) yang dapat membantu sekolah dalam melaksanakan Layanan PPDB dengan lebih mudah, cepat, transparan, akurat dan akuntabel secara Online di Internet.</p>
                    </div>
                </div>
                <a class="cta-btn" href="#">Selengkapnya</a>
            </div>
        </section><!-- AKHIR TENTANG KAMI -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="section-title">
                            <h2>Kontak</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                        <div class="info mt-4">
                            <i class="bi bi-geo-alt" style="background-color: #151C48"></i>
                            <h4>Location:</h4>
                            <p>Universitas Brawijaya, Jalan Veteran Malang, Ketawanggede, Malang City, East Java</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-4">
                                <div class="info">
                                    <i class="bi bi-envelope" style="background-color: #151C48"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info w-100 mt-4">
                                    <i class="bi bi-phone" style="background-color: #151C48"></i>
                                    <h4>Call:</h4>
                                    <p>+62 819 5673 5432</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
<?= $this->endSection()?>