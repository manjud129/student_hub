<?php

namespace App\Controllers;

use App\Models\ProgramModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new ProgramModel();

        $data['programs'] = $model->like('title', 'Beasiswa')
                                  ->orLike('title', 'BCA')
                                  ->orderBy('id', 'DESC')
                                  ->findAll(5); // tampilkan 5 saja

        return view('programs/index', $data);
    }
 public function tambah()
{
    if (!session()->get('logged_in')) {

        return redirect()->to('/login');
    }

    return view('tambah_beasiswa');
}
public function simpan()
{
    $model = new \App\Models\ProgramModel();

    $model->save([
        'user_id' => session()->get('user_id'),

        'title' => $this->request->getPost('title'),

        'deadline' => $this->request->getPost('deadline'),

        'source' => $this->request->getPost('source'),

        'link' => $this->request->getPost('link'),

        'status' => 'pending'
    ]);

    return redirect()->to('/');
}

}