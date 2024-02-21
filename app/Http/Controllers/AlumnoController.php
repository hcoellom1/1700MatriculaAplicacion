<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    //

    public function inicio(){
        $alumnos = Alumno::all();
        return view('alumnos', compact('alumnos'));
    }

    public function crear(){
        echo 'crear alumno';
    }
}
