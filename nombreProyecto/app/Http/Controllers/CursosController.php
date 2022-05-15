<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = Curso::all();
        if($curso != NULL){
            return response()->json($curso);
        }
        return response()->json([
            'message' => 'Not Found!'
        ], 404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = DB::table('cursos')->insertGetId(
            ['nombre_curso' => $request->nombre_curso, 
            'malla' => $request->malla,
            'nivel' => $request->nivel]
        );
        return response()->json([
            "message" => 'Fila creada'
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return DB::table('cursos')->where('id', $request->id)->first();

        /*** Otra forma de hacerlo.
        $usuario = Usuario::find($id);
        if ($usuario != NULL) {
            return response()->json($usuario);
        }
        return response()->json([
            "message" => 'No se encontro ningun valor de id.'
        ]);*/
    }


    public function showFirst()
    {
        return DB::table('cursos')->first();

        /*** Otra forma de hacerlo.
        $usuario = Usuario::find($id);
        if ($usuario != NULL) {
            return response()->json($usuario);
        }
        return response()->json([
            "message" => 'No se encontro ningun valor de id.'
        ]);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $affected = DB::table('cursos')
              ->where('id', $request->id)
              ->update(['nombre_curso' => $request->nombre_curso, 
              'malla' => $request->malla,
              'nivel' => $request->nivel]);

        return response()->json([
            "message" => 'Fila actualizada'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deleted = DB::table('cursos')->where('id', $request->id)->delete();
        return response()->json([
            "message" => 'Fila eliminada'
        ]);
    }
}
