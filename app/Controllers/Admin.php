<?php

namespace App\Controllers;
use App\Models\SiswaModel;
use App\Models\PendaftaranModel;

class Admin extends BaseController
{
    protected $session;
    protected $siswaModel;
    protected $pendaftaranModel;

    public function __construct()
    {
        $this->session = session();
        $this->siswaModel = new SiswaModel();
        $this->pendaftaranModel = new PendaftaranModel();
    }

    public function index()
    {
        if($this->session->level_akun != "admin") {
            return redirect()->to('/login');
        }
        return view('admin/index');
    }

    public function siswa()
    {
        if($this->session->level_akun != "admin") {
            return redirect()->to('/login');
        }
        $data['siswa'] = $this->siswaModel->findAll();
        return view('admin/data_siswa', $data);
    }

    public function siswa_verif()
    {
        if($this->session->level_akun != "admin") {
            return redirect()->to('/login');
        }
        $id_siswa = $this->request->getVar('id_siswa');
        $data = [
            'status' => "Sudah Terverifikasi",
        ];
        $this->siswaModel->update($id_siswa, $data);
        return redirect()->to('admin/siswa');
    }

    public function siswa_update()
    {
        if($this->session->level_akun != "admin") {
            return redirect()->to('/login');
        }
        $id_siswa = $this->request->getVar('id_siswa');
        $nama_lengkap = $this->request->getVar('nama_lengkap');
        $asal_sekolah = $this->request->getVar('asal_sekolah');
        $data = [
            'nama_lengkap' => $nama_lengkap,
            'asal_sekolah' => $asal_sekolah,
        ];
        $this->siswaModel->update($id_siswa, $data);
        return redirect()->to('admin/siswa');
    }

    public function siswa_delete()
    {
        if($this->session->level_akun != "admin") {
            return redirect()->to('/login');
        }
        $id_siswa = $this->request->getVar('id_siswa');
        $this->siswaModel->delete($id_siswa);
        $this->pendaftaranModel->where('id_siswa', $id_siswa)->delete();
        return redirect()->to('admin/siswa');
    }

}