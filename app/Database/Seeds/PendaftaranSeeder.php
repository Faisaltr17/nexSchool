<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_siswa' => 'AS002',
                'jalur_masuk' => 'Reguler',
                'pilihan_1' => 'S001',
                'pilihan_2' => 'S002',
                'asal_sekolah' => 'SMPN 5 Malang',
                'alamat_sekolah_asal' => 'Jalan Tlogomas No 9',
                'nama_ortu' => 'Abdi',
                'pekerjaan_ortu' => 'Pegawai',
                'alamat_ortu' => 'Jalan Veteran No 1',
                'no_hp_ortu' => '081234567891',
                'nem' => 35,
            ],
            [
                'id_siswa' => 'AS003',
                'jalur_masuk' => 'Reguler',
                'pilihan_1' => 'S001',
                'pilihan_2' => 'S003',
                'asal_sekolah' => 'SMPN 5 Malang',
                'alamat_sekolah_asal' => 'Jalan Tlogomas No 9',
                'nama_ortu' => 'Abdi',
                'pekerjaan_ortu' => 'Pegawai',
                'alamat_ortu' => 'Jalan Veteran No 1',
                'no_hp_ortu' => '081234567891',
                'nem' => 35,
            ],
            [
                'id_siswa' => 'AS004',
                'jalur_masuk' => 'Prestasi',
                'pilihan_1' => 'S002',
                'pilihan_2' => 'S004',
                'asal_sekolah' => 'SMPN 5 Malang',
                'alamat_sekolah_asal' => 'Jalan Tlogomas No 9',
                'nama_ortu' => 'Abdi',
                'pekerjaan_ortu' => 'Pegawai',
                'alamat_ortu' => 'Jalan Veteran No 1',
                'no_hp_ortu' => '081234567891',
                'nem' => 35,
            ],
            [
                'id_siswa' => 'AS005',
                'jalur_masuk' => 'Prestasi',
                'pilihan_1' => 'S003',
                'pilihan_2' => 'S004',
                'asal_sekolah' => 'SMPN 5 Malang',
                'alamat_sekolah_asal' => 'Jalan Tlogomas No 9',
                'nama_ortu' => 'Abdi',
                'pekerjaan_ortu' => 'Pegawai',
                'alamat_ortu' => 'Jalan Veteran No 1',
                'no_hp_ortu' => '081234567891',
                'nem' => 35,
            ]
        ];
        $this->db->table('pendaftaran')->insertBatch($data);
    }
}
