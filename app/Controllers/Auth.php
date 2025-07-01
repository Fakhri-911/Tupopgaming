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
        $session = session(); //
        $login = $this->request->getVar('login'); // bisa username atau email
        $password = $this->request->getVar('password'); //

        // New: Set up rules for login validation
        $rules = [
            'login'    => 'required',
            'password' => 'required'
        ];

        // New: Perform validation
        if (!$this->validate($rules)) {
            // Pass validation errors to the view using 'errors' flashdata
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Original logic starts here, after validation
        // Jika input valid email → login sebagai user
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) { //
            $userModel = new \App\Models\UserModel(); //
            $user = $userModel->where('email', $login)->first(); //

            if ($user && password_verify($password, $user['password'])) { //
                $session->set([ //
                    'id'        => $user['id'], //
                    'email'     => $user['email'], //
                    'role'      => 'user', //
                    'logged_in' => true //
                ]);
                return redirect()->to('/'); //
            }

        } else {
            // Jika bukan email, asumsikan username → login sebagai admin
            $adminModel = new \App\Models\AdminModel();
            $admin = $adminModel->where('username', $login)->first();

            if ($admin && password_verify($password, $admin['password'])) {
                $session->set([
                    'id'        => $admin['id'],
                    'username'  => $admin['username'],
                    'role'      => 'admin',
                    'logged_in' => true
                ]);
                return redirect()->to('/dashboard');
            }
        }

        // If not found, use a generic error message
        $session->setFlashdata('error', 'Email/Username atau password salah.'); // Adjusted message
        return redirect()->back()->withInput(); //
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
        helper(['form']);
        return view('RegisterForm');
    }


    public function saveRegister()
    {
        helper(['form']);

        $rules = [
            'email'            => 'required|valid_email|is_unique[users.email]',
            'password'         => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]'
        ];

        if (!$this->validate($rules)) {
            return view('RegisterForm', [
                'validation' => $this->validator
            ]);
        }

        $userModel = new \App\Models\UserModel();
        $userModel->save([
            'email'    => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil!');
    }




}