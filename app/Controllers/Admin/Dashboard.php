<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        if ($this->request->isAJAX()) {
            return $this->templater->viewAdmin('admin/dashboard/home');
        } else {

            return $this->templater->viewAdmin('admin/dashboard/home');
        }

        
    }
}
