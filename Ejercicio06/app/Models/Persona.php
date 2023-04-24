<?php 
namespace App\Models;

use CodeIgniter\Model;

class Persona extends Model{
    protected $table      = 'persona';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'ci';
    protected $allowedFields = ['ci', 'nombre_com', 'fecha_nac','telefono','departamento'];


}