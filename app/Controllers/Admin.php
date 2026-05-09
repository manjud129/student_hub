<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProgramModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    // ================= USERS =================

    public function users()
    {
        $userModel = new UserModel();

        $data['users'] = $userModel
            ->where('status', 'pending')
            ->findAll();

        return view('admin/users', $data);
    }

    public function approveUser($id)
    {
        $userModel = new UserModel();

        $userModel->update($id, [
            'status' => 'approved'
        ]);

        return redirect()->to('/admin/users');
    }

    // ================= PROGRAMS =================

    public function programs()
    {
        $programModel = new ProgramModel();

        $data['programs'] = $programModel
            ->where('status', 'pending')
            ->findAll();

        return view('admin/programs', $data);
    }

    public function approveProgram($id)
    {
        $programModel = new ProgramModel();

        $programModel->update($id, [
            'status' => 'approved'
        ]);

        return redirect()->to('/admin/programs');
    }
}