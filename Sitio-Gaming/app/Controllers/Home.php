<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function inicio()
    {
        // Aquí podemos pasar datos a la vista si quisiéramos
        $data = [
            'titulo' => 'Mi Portafolio con CI4',
            'mensaje' => 'Bienvenido a mi nuevo proyecto desde cero'
        ];

        return view('inicio', $data); 
    }

    public function index()
    {
        // Aquí podemos pasar datos a la vista si quisiéramos
        $data = [
            'titulo' => 'Mi Portafolio con CI4',
            'mensaje' => 'Bienvenido a mi nuevo proyecto desde cero'
        ];

        return view('welcome_message', $data); 
    }
}
