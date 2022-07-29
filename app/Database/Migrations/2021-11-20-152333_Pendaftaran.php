<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendaftaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pendaftaran' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_siswa' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jalur_masuk' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'pilihan_1' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'pilihan_2' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'asal_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat_sekolah_asal' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_ortu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'pekerjaan_ortu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat_ortu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_hp_ortu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nem' => [
                'type' => 'FLOAT',
            ],
            'prestasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'bukti_dokumen' => [
                'type' => 'MEDIUMBLOB',
                'null' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id_pendaftaran');
        $this->forge->createTable('pendaftaran');
    }

    public function down()
    {
        $this->forge->dropTable('pendaftaran');
    }
}
