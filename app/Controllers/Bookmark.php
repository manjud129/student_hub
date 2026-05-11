<?php

namespace App\Controllers;

use App\Models\BookmarkModel;
use App\Models\ProgramModel;

class Bookmark extends BaseController
{
    public function index()
    {
        // Cek login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $bookmarkModel = new BookmarkModel();
        $programModel = new ProgramModel();
        
        $userId = (int) session()->get('user_id');
        
        // Ambil bookmark user
        $bookmarks = $bookmarkModel->where('user_id', $userId)->findAll();
        
        $programs = [];
        foreach ($bookmarks as $bookmark) {
            $program = $programModel->find($bookmark['program_id']);
            if ($program) {
                $programs[] = $program;
            }
        }
        
        $data['programs'] = $programs;
        return view('programs/saved', $data);
    }

    public function save($programId)
    {
        // Cek login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $userId = (int) session()->get('user_id');
        $progId = (int) $programId;
        
        $bookmarkModel = new BookmarkModel();
        $programModel = new ProgramModel();
        
        // Cek program ada dan approved
        $program = $programModel->find($progId);
        if (!$program || $program['status'] != 'approved') {
            return redirect()->back()->with('error', 'Program tidak valid');
        }
        
        // Cek sudah bookmark atau belum
        $exists = $bookmarkModel
            ->where('user_id', $userId)
            ->where('program_id', $progId)
            ->first();
            
        if (!$exists) {
            $bookmarkModel->insert([
                'user_id' => $userId,
                'program_id' => $progId
            ]);
        }
        
        return redirect()->to('/saved');
    }
}