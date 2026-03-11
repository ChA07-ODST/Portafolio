<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function login()
    {
        // Esto solo carga la vista del formulario
        return view('auth/login');
    }
}