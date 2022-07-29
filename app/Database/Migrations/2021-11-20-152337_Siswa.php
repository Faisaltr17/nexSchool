<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswa' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_akun' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'id_sekolah_lulus' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nisn' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'gambar' => [
                'type' => 'MEDIUMBLOB',
                'null' => true,
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal_lahir' => [
				'type' => 'DATE'
			],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'asal_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addPrimaryKey('id_siswa');
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
