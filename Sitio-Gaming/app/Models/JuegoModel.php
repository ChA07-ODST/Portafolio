<?php

namespace App\Models;

use CodeIgniter\Model;

class JuegoModel extends Model
{
    protected $table            = 'juegos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    
    protected $allowedFields    = ['titulo', 'plataforma', 'caratula', 'descripcion'];
}