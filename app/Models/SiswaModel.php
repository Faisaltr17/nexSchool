<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $returnType = 'object';
    protected $allowedFields = ['id_siswa', 'id_akun', 'id_sekolah_lulus', 'nama_lengkap', 'nisn', 'gambar', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'jenis_kelamin', 'agama', 'asal_sekolah', 'no_hp', 'status'];
}