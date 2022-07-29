<?php

namespace App\Controllers;

use App\Models\AkunModel;
use App\Models\SekolahModel;
use App\Models\PendaftaranModel;
use App\Models\SiswaModel;

class Home extends BaseController
{
    protected $akunModel;
    protected $sekolahModel;
    protected $pendaftaranModel;
    protected $siswaModel;
    protected $session;

    public function __construct()
    {
        $this->session = session();
        $this->akunModel = new AkunModel();
        $this->sekolahModel = new SekolahModel();
        $this->pendaftaranModel = new PendaftaranModel();
        $this->siswaModel = new SiswaModel();
    }

    public function index()
    {
        $data['pendaftar'] = $this->pendaftaranModel->findAll();
        $data['title'] = 'home';
        return view('utama/index', $data);
    }

    public function pendaftaran()
    {
        if($this->session->level_akun != "siswa") {
            return redirect()->to('/login');
        }
        $siswa = $this->siswaModel->where('id_akun', $this->session->id_akun)->first();
        if(!empty($siswa)) {
            $this->session->setFlashdata('msg', 'Anda sudah daftar!');
            return redirect()->to('/');
        }
        $data['sekolah'] = $this->sekolahModel->findAll();
        return view('utama/pendaftaran', $data);
    }

    public function proses_pendaftaran()
    {
        $id_siswa = "AS00" . "" . $this->session->id_akun;
        $this->siswaModel->insert([
            'id_siswa' => $id_siswa,
            'id_akun' => $this->session->id_akun,
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nisn' => $this->request->getVar('nisn'),
            'gambar' => $this->request->getVar('gambar'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getVar('agama'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'no_hp' => $this->request->getVar('no_hp'),
            'status' => "Belum Diverifikasi"
        ]);
        $p = $this->request->getVar('mytext');
        $prestasi = "";
        foreach ($p as $pres) {
            $prestasi .= "$pres, ";
        }
        $prestasi = rtrim($prestasi, ", ");
        $this->pendaftaranModel->save([
            'id_siswa' => $id_siswa,
            'jalur_masuk' => $this->request->getVar('jalur_masuk'),
            'pilihan_1' => $this->request->getVar('pilihan_1'),
            'pilihan_2' => $this->request->getVar('pilihan_2'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'alamat_sekolah_asal' => $this->request->getVar('alamat_sekolah_asal'),
            'nama_ortu' => $this->request->getVar('nama_ortu'),
            'pekerjaan_ortu' => $this->request->getVar('pekerjaan_ortu'),
            'alamat_ortu' => $this->request->getVar('alamat_ortu'),
            'no_hp_ortu' => $this->request->getVar('no_hp_ortu'),
            'nem' => $this->request->getVar('nem'),
            'prestasi' => $prestasi,
            'bukti_dokumen' => $this->request->getVar('bukti_dokumen')
        ]);
        return redirect()->to('/');
    }

    public function pendaftar()
    {
        if($this->session->level_akun != "siswa") {
            return redirect()->to('/login');
        }
        $data['pendaftar'] = $this->pendaftaranModel->get_data_pendaftar();
        $data['sekolah'] = $this->sekolahModel->findAll();
        $data['title'] = 'pendaftar';
        return view('utama/pendaftar', $data);
    }

    public function hasil()
    {
        if($this->session->level_akun != "siswa") {
            return redirect()->to('/login');
        }
        $data['pendaftar'] = $this->pendaftaranModel->get_data_hasil();
        $data['sekolah'] = $this->sekolahModel->findAll();
        $data['title'] = 'hasil';
        return view('utama/hasil', $data);
    }

    public function sekolah()
    {
        $data['sekolah'] = $this->sekolahModel->findAll();
        $data['title'] = 'sekolah';
        return view('utama/data_sekolah', $data);
    }
}
