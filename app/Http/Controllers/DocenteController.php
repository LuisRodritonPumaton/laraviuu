<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function docentes(){
        $docentes = Docente::paginate(5);
        return view('/docentes/docentes', compact('docentes'));
    }

    public function registrar(Request $request){
        $docente = new Docente();
        $docente->primerNombre=$request->primerNombre;
        $docente->segundoNombre=$request->segundoNombre;
        $docente->primerApellido=$request->primerApellido;
        $docente->segundoApellido=$request->segundoApellido;
        $docente->especialidad=$request->especialidad;
        $fecha = date('Y-m-d', strtotime($request->fechaNacimiento));
        $docente->fechaNacimiento=$fecha;
        $docente->save();
        return redirect()->route('docentes');
    }

    public function actualizar(Request $request){
        $docente = Docente::find($request->id);
        $docente->primerNombre=$request->primerNombre;
        $docente->segundoNombre=$request->segundoNombre;
        $docente->primerApellido=$request->primerApellido;
        $docente->segundoApellido=$request->segundoApellido;
        $docente->especialidad=$request->especialidad;
        $fecha = date('Y-m-d', strtotime($request->fechaNacimiento));
        $docente->fechaNacimiento=$fecha;
        $docente->update();
        return redirect()->route('docentes');
    }

    public function eliminar(Docente $docente){
        $docente->delete();
        return redirect()->route('docentes');
    }

    //NAVEGACION
    public function docente_registro(){
        return view('/docentes/docente-registro');
    }

    public function docente_actualizacion($id){
        $docente = Docente::find($id);
        return view('/docentes/docente-actualizacion', compact('docente'));
    }
}
