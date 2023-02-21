<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    public function cursos(){
        $cursos = Curso::paginate(5);
        return view('/cursos/cursos', compact('cursos'));
    }
    public function registrar(Request $request){
        $curso = new Curso();
        $curso->nombreCurso=$request->nombreCurso;
        $curso->lugarCurso=$request->lugarCurso;
        $curso->id_docente=$request->id_docente;
        $curso->save();
        return redirect()->route('cursos');
    }
    public function actualizar(Request $request){
        $curso = Curso::find($request->id);
        $curso->nombreCurso=$request->nombreCurso;
        $curso->lugarCurso=$request->lugarCurso;
        $curso->id_docente=$request->id_docente;
        $curso->update();
        return redirect()->route('cursos');
    }
    public function eliminar(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos');    
    }
    //NAVEGACION
    public function curso_registro(){
        $docentes = Docente::all();
        return view('/cursos/curso-registro', compact('docentes'));
    }
    public function curso_actualizacion($id){
        $curso = Curso::find($id);
        $docentes = Docente::all();
        return view('/cursos/curso-actualizacion', compact('curso', 'docentes'));
    }

    //SERVICIOS REST
    public function lista_cursos(){
        $cursos = Curso::with('docente')->get();
        return response()->json($cursos)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}
