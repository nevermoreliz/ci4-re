<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Convenio extends BaseController
{
    public function index()
    {
        if ($this->request->isAJAX()) {
            echo ('<h1>estas en publicacion con ajax</h1>');
            return $this->templater->viewAdmin('admin/dashboard/home');
        }else{
            echo ('<h1>estas aqui publicacion sin ajax</h1>');
            return $this->templater->viewAdmin('admin/dashboard/home');
        }
    
        
    }
}
