<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sekolah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kepala_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun_berdiri' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kuota_ipa' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'kuota_ips' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'jalur_masuk' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'narahubung' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addPrimaryKey('id_sekolah');
        $this->forge->createTable('sekolah');
    }

    public function down()
    {
        $this->forge->dropTable('sekolah');
    }
}
