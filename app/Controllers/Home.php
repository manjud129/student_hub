<?php

namespace App\Controllers;

use App\Models\ProgramModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new ProgramModel();

        // Filter logic sama...
        $search = trim($this->request->getGet('search') ?? '');
        $jenjang = trim($this->request->getGet('jenjang') ?? '');
        $tipe = trim($this->request->getGet('tipe') ?? '');
        $negara = trim($this->request->getGet('negara') ?? '');

        $builder = $model->where('status', 'approved');

        if ($search) {
            $builder->groupStart()
                ->like('title', $search)
                ->orLike('source', $search)
                ->orLike('jenjang', $search)
                ->orLike('negara', $search)
                ->groupEnd();
        }
        if ($jenjang)
            $builder->where('jenjang', $jenjang);
        if ($tipe)
            $builder->where('tipe', $tipe);
        if ($negara)
            $builder->like('negara', $negara);

        $data['programs'] = $builder->orderBy('deadline', 'ASC')->findAll();

        // ✅ SELALU SET TOTAL
        $data['filters'] = [
            'search' => $search,
            'jenjang' => $jenjang,
            'tipe' => $tipe,
            'negara' => $negara,
            'total' => count($data['programs'])  // ✅ INI WAJIB
        ];

        // User check
        if (session()->get('logged_in') && session()->get('role') == 'user') {
            return view('programs/user_home', $data);
        }

        return view('programs/guest_home', $data);  // ✅ Data lengkap ke guest juga
    }

    // ... method lain tetap sama
    public function tambah()
    { /* ... */
    }
    public function simpan()
    { /* ... */
    }
}