<?= $this->extend('utama/layout')?>
<?= $this->section('title')?>
Data Pendaftar
<?= $this->endSection()?>
<?= $this->section('konten')?>

<section id="aktor" class="aktor">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <ol>
                <li><a href="/">Home</a></li>
                <li style="color: #0095ce;">Data Pendaftar</li>
            </ol>
        </div>
    </div>
</section><!-- AKHIR AKTOR -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts" style="margin-top: 0px; background-color: #151C48;">
    <div class="container" id="about">
        <div class="content">
            <div class="row counters">
                <div class="col-lg-12 text-center" style="padding-top: 20px;">
                    <h2>Jumlah Pendaftar <?= count($pendaftar);?> Siswa</h2>
                </div><br>
            </div>
        </div>
    </div>
</section><!-- End Counts Section -->

<div class="halaman-sekolah" style="margin-top: 50px;">
    <!--HASIL-->
    <div class="container">
        <h3 style="text-align: center;">PENDAFTAR SMA</h3><br>
        <input style="margin-bottom:30px;
                margin-left: 180px;" type="text" id="myInput" onkeyup="myFunction()"
            placeholder="Cari Nama Anda!" name="keyword">
        <button class="cari" type="submit" onclick="myFunction()" name="Cari">Cari!</button>
        <div class="table-responsive">
            <table border="1" style="margin-left:180px; margin-bottom: 100px;" id="myTable" cellspacing="0"
                cellpadding="25">
                <tr class="header">
                    <th scope="col">NO.</th>
                    <th scope="col">NAMA LENGKAP</th>
                    <th scope="col">NO PENDAFTARAN</th>
                    <th scope="col">SEKOLAH ASAL</th>
                    <th scope="col">PILIHAN 1</th>
                    <th scope="col">PILIHAN 2</th>
                    <th scope="col">NEM</th>
                </tr>
                <?php $no = 1;
          foreach ($pendaftar as $d) : ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $d->nama_lengkap; ?></td>
                    <td><?= $d->id_siswa; ?></td>
                    <td><?= $d->asal_sekolah; ?></td>
                    <td><?php $num = (int) $d->pilihan_1; echo $sekolah[$num-1]['nama_sekolah']; ?></td>
                    <td><?php $num = (int) $d->pilihan_2; echo $sekolah[$num-1]['nama_sekolah']; ?></td>
                    <td><?= $d->nem; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection()?>