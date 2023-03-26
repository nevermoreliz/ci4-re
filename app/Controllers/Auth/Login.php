<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function signin()  {
        dd($this->request->getPost());
    }


}
