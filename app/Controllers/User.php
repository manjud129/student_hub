<?php

namespace App\Controllers;

class User extends BaseController
{
    public function account()
    {
        if (!session()->get('logged_in')) {

            return redirect()->to('/login');
        }

        return view('user/account');
    }
}