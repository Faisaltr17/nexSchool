<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederUtama extends Seeder
{
    public function run()
    {
        $this->call('AkunSeeder');
        $this->call('SekolahSeeder');
        $this->call('SiswaSeeder');
        $this->call('PendaftaranSeeder');
    }
}
