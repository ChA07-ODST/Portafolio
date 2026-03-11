<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index()
    {
        try {
            // Intentamos instanciar el modelo con su ruta completa para evitar fallos de 'use'
            $usuarioModel = new \App\Models\UsuarioModel();
            
            // Intentamos una consulta simple
            $usuarios = $usuarioModel->findAll();
            
            $data['mensaje_db'] = "Conexión y Modelo funcionando. Usuarios en tabla: " . count($usuarios);
        } catch (\Throwable $e) {
            // Esto atrapará errores de sintaxis, archivos no encontrados o fallos de base de datos
            $data['mensaje_db'] = "Error detectado: " . $e->getMessage();
        }

        return view('inicio_gaming', $data);
    }

    public function login()
    {
        return view('login');
    }
}
