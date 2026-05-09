<?php

namespace App\Controllers;

use App\Models\ProgramModel;

class Program extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProgramModel();
    }

    // Menampilkan semua program
    public function index()
    {
        $data['programs'] = $this->model->findAll();
        return view('program/index', $data);
    }

    // Detail program
    public function show($id)
    {
        $data['program'] = $this->model->find($id);
        return view('program/detail', $data);
    }

    // Form tambah
    public function create()
    {
        return view('program/create');
    }

    // Simpan data
    public function store()
    {
        $this->model->save([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/program');
    }

    // Form edit
    public function edit($id)
    {
        $data['program'] = $this->model->find($id);
        return view('program/edit', $data);
    }

    // Update data
    public function update($id)
    {
        $this->model->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/program');
    }

    // Hapus
    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/program');
    }
}