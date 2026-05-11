<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function saveRegister()
    {
        $model = new UserModel();

        $model->save([
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
            'role' => 'user',
            'status' => 'pending'
        ]);
        return redirect()->to('/login')->with('success', 'Registrasi berhasil! Tunggu approval admin.');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $session = session();
        $model = new UserModel();

        $user = $model->where(
            'email',
            $this->request->getPost('email')
        )->first();

        if ($user) {
            if ($user['status'] != 'approved') {
                return redirect()->back()->with(
                    'error',
                    'Akun anda belum disetujui admin'
                );
            }

            if (
                password_verify(
                    $this->request->getPost('password'),
                    $user['password']
                )
            ) {
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'logged_in' => true
                ]);

                if ($user['role'] == 'admin') {
                    return redirect()->to('/admin');
                }

                return redirect()->to('/')->with('success', 'Login berhasil!');
            }
        }

        return redirect()->back()->with(
            'error',
            'Email atau password salah'
        );
    }

    // ========== LOGOUT - LANGSUNG KE GUEST HOME ==========
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/')->with('success', '✅ Logout berhasil! Selamat datang kembali di Student Hub.');
    }
}