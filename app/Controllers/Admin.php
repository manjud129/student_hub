<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProgramModel;

class Admin extends BaseController
{
    public function __construct()
    {
        if (
            !session()->get('logged_in') ||
            session()->get('role') != 'admin'
        ) {
            exit('Akses ditolak');
        }
    }

    public function index()
    {
        return view('admin/index');
    }

    /*
    =========================
    LOAD USERS
    =========================
    */

    public function users()
    {
        $userModel = new UserModel();

        $data['users'] = $userModel
            ->where('status', 'pending')
            ->findAll();

        return view('admin/users_content', $data);
    }

    /*
    =========================
    APPROVE USER
    =========================
    */

    public function approveUser($id)
    {
        $userModel = new UserModel();

        $userModel->update($id, [
            'status' => 'approved'
        ]);

        return redirect()->to('/admin');
    }

    /*
    =========================
    LOAD PROGRAMS
    =========================
    */

    public function programs()
    {
        $programModel = new ProgramModel();

        $data['programs'] = $programModel
            ->where('status', 'pending')
            ->findAll();

        return view('admin/programs_content', $data);
    }

    /*
    =========================
    APPROVE PROGRAM
    =========================
    */

    public function approveProgram($id)
    {
        $programModel = new ProgramModel();

        $programModel->update($id, [
            'status' => 'approved'
        ]);

        return redirect()->to('/admin');
    }
}