<?php

namespace App\Controllers;

use App\Models\UserModel; // Import UserModel
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        // Tampilkan form login
        return view('LoginForm');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // Validasi input
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[6]', // Sesuaikan panjang minimum
        ];

        if (!$this->validate($rules)) {
            // Jika validasi gagal, kembalikan ke form login dengan error
            $session->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->back()->withInput();
        }

        $user = $model->getUserByEmail($email);

        if ($user) {
            // Verifikasi password yang di-hash
            if ($password === $user['password']) { // Ganti dengan metode hash yang sesuai
                // Jika password cocok, buat sesi login
                $ses_data = [
                    'id'        => $user['id'],
                    'email'     => $user['email'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);

                // Redirect ke halaman home
                return redirect()->to(base_url('/'));
            } else {
                // Password salah
                $session->setFlashdata('error', 'Password salah.');
                return redirect()->back()->withInput();
            }
        } else {
            // Email tidak ditemukan
            $session->setFlashdata('error', 'Email tidak terdaftar.');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Hancurkan semua sesi

        // Redirect ke halaman login atau home
        return redirect()->to(base_url('/'));
    }

    public function register()
    {
        // Tampilkan form pendaftaran
        return view('RegisterForm');
    }

    public function authregister()
{
    if ($this->request->getMethod() === 'post') {
        $rules = [
            'email'            => 'required|valid_email|is_unique[users.email]',
            'password'         => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $userModel = new UserModel();
        $userModel->save([
            'email'    => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    else {
            // Email tidak ditemukan
            $session->setFlashdata('error', 'AJA DULU.');
            return redirect()->back()->withInput();
        }
}

}