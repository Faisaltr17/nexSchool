<?php

namespace App\Controllers;
use App\Models\AkunModel;

class Login extends BaseController
{
    protected $akunModel;
    protected $session;

    public function __construct()
    {
        $this->session = session();
        if($this->session->has('id_akun')) {
            return redirect()->to('/');
        }
        $this->akunModel = new AkunModel();
    }

    public function index()
    {
        if($this->session->has('id_akun')) {
            return redirect()->to('/');
        }
        return view('login/index');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }

    public function register()
    {
        if($this->session->has('id_akun')) {
            return redirect()->to('/');
        }
        $data = [
            'validation' => \config\Services::validation()
        ];
        return view('login/register', $data);
    }

    public function registrasi()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[akun.username]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ]
        ])) {
            $data = [
                'validation' => \config\Services::validation()
            ];
            return view('login/register', $data);
        }
        $this->akunModel->save([
            'username' => htmlspecialchars( $this->request->getVar('username')),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'level_akun' => "siswa"      
        ]);
        return redirect()->to('login/siswa');
    }

    public function login_siswa()
    {
        if($this->session->has('id_akun')) {
            return redirect()->to('/');
        }
        return view('login/siswa');
    }

    public function proses_login_siswa()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = $this->akunModel->where('username', $username)->where('level_akun', 'siswa')->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_akun' => $data['id_akun'],
                    'level_akun' => $data['level_akun'],
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];
                $this->session->set($ses_data);
                return redirect()->to('/');
            } else {
                $this->session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('login/siswa');
            }
        } else {
            $this->session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('login/siswa');
        }
    }

    public function login_admin()
    {
        if($this->session->has('id_akun')) {
            return redirect()->to('/');
        }
        return view('login/admin');
    }

    public function proses_login_admin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = $this->akunModel->where('username', $username)->where('level_akun', 'admin')->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_akun' => $data['id_akun'],
                    'level_akun' => $data['level_akun'],
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];
                $this->session->set($ses_data);
                return redirect()->to('/admin/home');
            } else {
                $this->session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('login/admin');
            }
        } else {
            $this->session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('login/admin');
        }
    }
}