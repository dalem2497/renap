<?php 
namespace App\Models;

use CodeIgniter\Model;

class Ciudadanos extends Model{
    protected $table      = 'ciudadanos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'dpi';
    protected $allowFields = ['dpi','apellido','nombre','direccion','tel_casa','tel_movil','email','fechanac','cod_nivel_acad','lugar_nacimiento'];
}