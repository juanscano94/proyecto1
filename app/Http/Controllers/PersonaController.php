<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona; //aquí importamos el modelo

class PersonaController extends Controller
{

    public function inicio()
    {  
        return view('index', ["datos" => Persona::Mensaje()]);
    }
    
}
