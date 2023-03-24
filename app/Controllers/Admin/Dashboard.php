<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return $this->templater->viewAdmin('admin/dashboard/home');
        // return view('admin/layout_admin/index');
    }
}
