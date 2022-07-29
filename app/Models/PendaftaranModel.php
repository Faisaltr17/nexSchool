<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    protected $allowedFields = ['id_pendaftaran', 'id_siswa', 'jalur_masuk', 'pilihan_1', 'pilihan_2', 'asal_sekolah', 'alamat_sekolah_asal', 'nama_ortu', 'pekerjaan_ortu', 'alamat_ortu', 'no_hp_ortu', 'nem', 'prestasi', 'bukti_dokumen'];
    protected $db;

    protected function initialize()
    {
        $this->db = \Config\Database::connect();
    }
    
    public function get_data_pendaftar()
    {
        $query = $this->db->query("SELECT nama_lengkap, siswa.id_siswa, siswa.asal_sekolah, SUBSTRING(pilihan_1, 3, 4) AS pilihan_1, SUBSTRING(pilihan_2, 3, 4) AS pilihan_2, nem FROM siswa LEFT JOIN pendaftaran ON siswa.id_siswa = pendaftaran.id_siswa");
        return $query->getResult();
    }

    public function get_data_hasil()
    {
        $query = $this->db->query("SELECT nama_lengkap, siswa.id_siswa, siswa.asal_sekolah, SUBSTRING(id_sekolah_lulus, 3, 4) AS id_sekolah_lulus, nem FROM siswa LEFT JOIN pendaftaran ON siswa.id_siswa = pendaftaran.id_siswa WHERE id_sekolah_lulus<>''");
        return $query->getResult();
    }
}