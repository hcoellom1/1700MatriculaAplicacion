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
        return view('crear');
    }

    public function guardar(Request $request){
        $nvoAlumno = new Alumno();
        $nvoAlumno->nombre = $request->input('nombre');
        $nvoAlumno->apellido = $request->input('apellido');
        $nvoAlumno->correo   = $request->input('correo');
        $nvoAlumno->telefono = $request->input('telefono');
        $nvoAlumno->direccion = $request->input('direccion');
        $nvoAlumno->codigoCarrera = $request->input('codigoCarrera');
        $nvoAlumno->fechaNacimiento = $request->input('fechaNacimiento');
        $nvoAlumno->numeroCuenta    = $request->input('numeroCuenta');
        $nvoAlumno->save();

        return redirect('/alumnos');
    }
}
