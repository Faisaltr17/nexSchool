<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AkunSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin', PASSWORD_DEFAULT),
                'level_akun' => 'admin'
            ],
            [
                'username' =>  'siswa',
                'password' =>  password_hash('siswa', PASSWORD_DEFAULT),
                'level_akun' =>  'siswa'
            ],
            [
                'username' =>  'siswa1',
                'password' =>  password_hash('siswa1', PASSWORD_DEFAULT),
                'level_akun' =>  'siswa'
            ],
            [
                'username' =>  'siswa2',
                'password' =>  password_hash('siswa2', PASSWORD_DEFAULT),
                'level_akun' =>  'siswa'
            ],
            [
                'username' =>  'siswa3',
                'password' =>  password_hash('siswa3', PASSWORD_DEFAULT),
                'level_akun' =>  'siswa'
            ]
        ];
        $this->db->table('akun')->insertBatch($data);
    }
}
