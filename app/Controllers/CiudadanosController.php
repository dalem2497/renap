<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ciudadanos;
class CiudadanosController extends Controller{

    public function cargarCiudadanos(){

        $ciudadano = new Ciudadanos();

        $datos['datos'] = $ciudadano->findAll();
        return view('view_ciudadanos',$datos);
    }

}