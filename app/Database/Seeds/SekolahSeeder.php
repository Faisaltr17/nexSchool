<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SekolahSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_sekolah' => 'S001',
                'kepala_sekolah' => 'Aditya',
                'tahun_berdiri' => '29 Mei 1997',
                'nama_sekolah' => 'SMAN 1 MOJOKERTO',
                'kuota_ipa' => 200,
                'kuota_ips' => 100,
                'jalur_masuk' => 'Reguler Prestasi',
                'alamat' => 'Jl Tugu Utara No 1',
                'narahubung' => '(0341) 366454'
            ],
            [
                'id_sekolah' => 'S002',
                'kepala_sekolah' => 'Dika',
                'tahun_berdiri' => '27 April 1987',
                'nama_sekolah' => 'SMAN 2 MOJOKERTO',
                'kuota_ipa' => 150,
                'kuota_ips' => 150,
                'jalur_masuk' => 'Reguler Prestasi',
                'alamat' => 'Jl Patimura 9 Bandu',
                'narahubung' => '(0341) 366454'
            ],
            [
                'id_sekolah' => 'S003',
                'kepala_sekolah' => 'Faisal',
                'tahun_berdiri' => '29 Mei 1997',
                'nama_sekolah' => 'SMAN 3 MOJOKERTO',
                'kuota_ipa' => 300,
                'kuota_ips' => 100,
                'jalur_masuk' => 'Reguler Prestasi',
                'alamat' => 'Jl Tugu Selatan No 4',
                'narahubung' => '(0341) 366454'
            ],
            [
                'id_sekolah' => 'S004',
                'kepala_sekolah' => 'Andii',
                'tahun_berdiri' => '29 Mei 1998',
                'nama_sekolah' => 'SMAN 10 Malang',
                'kuota_ipa' => 200,
                'kuota_ips' => 150,
                'jalur_masuk' => 'Reguler Prestasi',
                'alamat' => 'Jl Tugu Timur No 1',
                'narahubung' => '(0341) 366454'
            ]
        ];
        $this->db->table('sekolah')->insertBatch($data);
    }
}
