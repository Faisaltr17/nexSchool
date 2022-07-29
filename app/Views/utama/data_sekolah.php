<?= $this->extend('utama/layout')?>
<?= $this->section('title')?>
Data Sekolah
<?= $this->endSection()?>
<?= $this->section('konten')?>
    <!-- ======= AKTOR ======= -->
    <section id="aktor" class="aktor">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li style="color:  #0095ce;">Pendaftaran</li>
                </ol>
            </div>
        </div>
    </section><!-- AKHIR AKTOR -->

    <main id="main">
        <div class="container-sekolah">
            <?php foreach($sekolah as $s) {?>
            <div class="gap-content" id="index-datasekolah">
                <img src="https://i.ibb.co/mGjS6bP/sman1.png" alt="foto sekolah" id="img-sekolah" border="0">
                <div class="datasekolah">
                    <h3><?= $s['nama_sekolah']?></h3>
                    <table>
                        <tr>
                            <td>
                                <b>Kepala Sekolah</b>
                            </td>
                            <td> : </td>
                            <td><?= $s['kepala_sekolah']?></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Tahun Berdiri</b>
                            </td>
                            <td> : </td>
                            <td><?= $s['tahun_berdiri']?></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Kuota IPA</b>
                            </td>
                            <td> : </td>
                            <td><?= $s['kuota_ipa']?></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Kuota IPS</b>
                            </td>
                            <td> : </td>
                            <td><?= $s['kuota_ips']?></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Jalur Masuk</b>
                            </td>
                            <td> : </td>
                            <td><?= $s['jalur_masuk']?></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Alamat</b>
                            </td>
                            <td> : </td>
                            <td><?= $s['alamat']?></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Narahubung</b>
                            </td>
                            <td> : </td>
                            <td><?= $s['narahubung']?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php }?>
        </div>
        <br> <br>
        <!-- ======= FORM ======= -->
        <a href="/pendaftaran">
            <button type="submit" class="daftar" name="daftar"
                style="background-color:#151C48; margin:-2em 10em 2em 43em;padding:1em;border-radius:10px;">
                <p style="text-decoration: none; color: #FFFFFF ;font-style: normal;font-weight: 500;font-size: 16px;">
                    Daftar Sekarang! </p>
            </button>
        </a>
    </main>
    <!-- End #main -->
<?= $this->endSection()?>