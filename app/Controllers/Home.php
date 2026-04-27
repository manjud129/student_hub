<?php

namespace App\Controllers;

use App\Models\ProgramModel;

class home extends BaseController
{
    public function index()
    {
        $model = new ProgramModel();
        
        // Mengambil data yang judulnya ada kata "Beasiswa" atau "BCA" agar rapi
        $data['programs'] = $model->like('title', 'Beasiswa')
                                  ->orLike('title', 'BCA')
                                  ->orderBy('id', 'DESC')
                                  ->findAll();

        return view('daftar_beasiswa', $data);
    }
}