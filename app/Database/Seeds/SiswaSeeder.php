<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_siswa' => 'AS002',
                'id_akun' => 2,
                'id_sekolah_lulus' => '',
                'nama_lengkap' => 'Andi Aderian Arhadianto',
                'nisn' => '12345',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2001-08-08',
                'alamat' => 'Jalan Veteran No 1',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'asal_sekolah' => 'SMPN 5 Malang',
                'no_hp' => '081234567891',
                'status' => 'Belum Diverifikasi',
            ],
            [
                'id_siswa' => 'AS003',
                'id_akun' => 3,
                'id_sekolah_lulus' => '',
                'nama_lengkap' => 'Andika Wiranata',
                'nisn' => '12346',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2001-08-08',
                'alamat' => 'Jalan Veteran No 1',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'asal_sekolah' => 'SMPN 5 Malang',
                'no_hp' => '081234567891',
                'status' => 'Belum Diverifikasi',
            ],
            [
                'id_siswa' => 'AS004',
                'id_akun' => 4,
                'id_sekolah_lulus' => 'S002',
                'nama_lengkap' => 'Muhammad Faisal Shabri',
                'nisn' => '12347',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2001-08-08',
                'alamat' => 'Jalan Veteran No 1',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'asal_sekolah' => 'SMPN 5 Malang',
                'no_hp' => '081234567891',
                'status' => 'Sudah Terverifikasi',
            ],
            [
                'id_siswa' => 'AS005',
                'id_akun' => 5,
                'id_sekolah_lulus' => 'S003',
                'nama_lengkap' => 'Muhammad Alfarrel Indrawan',
                'nisn' => '12348',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2001-08-08',
                'alamat' => 'Jalan Veteran No 1',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'asal_sekolah' => 'SMPN 5 Malang',
                'no_hp' => '081234567891',
                'status' => 'Sudah Terverifikasi',
            ]
        ];
        $this->db->table('siswa')->insertBatch($data);
    }
}
