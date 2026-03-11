<?php
namespace App\Models;
use CodeIgniter\Model;
class UsuarioModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    
    // Estos son los campos que el sistema tiene permiso de escribir
    protected $allowedFields    = ['username', 'email', 'password', 'avatar'];

    // Activamos las fechas automáticas para saber cuándo se registró alguien
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = null; // No usamos fecha de actualización por ahora
}