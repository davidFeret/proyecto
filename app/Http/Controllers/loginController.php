<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Persona;
use App\Usuario;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retornar la vista de login
        // En compact, se pueden enviar parámetros por []
        return view('ingresar_login');
    }

    public function ingresar(Request $request)
    {
        $usuario = new Usuario();
        
        if($usuario ->where('usuario', '=', $request->input('usuario'))
                    ->where('password', '=', $request->input('password'))
                    ->count() > 0)
        {
            // Significa que actualmente existe ese nombre de usuario
            return "true";
        } else
            return "false";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ingresar_registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();

        if($usuario ->where('usuario', '=', $request->input('usuario'))->count() > 0)
        {
            // Significa que actualmente existe ese nombre de usuario
            return "false";
        } else {
            // Guardar los datos personales
            $persona = new Persona();
            $persona->nombre  = $request->input('nombre');
            $persona->paterno = $request->input('paterno');
            $persona->materno = $request->input('materno');
            $persona->sexo    = $request->input('sexo');

            $persona->save();

            // Guardar los datos de usuario
            // $usuario = new Usuario();
            $usuario->idPersona = $persona->id;
            $usuario->usuario = $request->input('usuario');
            $usuario->password = $request->input('password');
            $usuario->tipo = "cliente";

            $usuario->save();
            return "true";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
