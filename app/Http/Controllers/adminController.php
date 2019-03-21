<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\Persona;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activo = "0";
        return view('private.admin_index', compact('activo'));
    }

    /**
     * Opciones de usuario
     */
    public function getUserView()
    {
        // Acceder al formulario de registrar usuario
        $activo = "1";
        return view('private.admin_usuarios_nuevo', compact('activo'));
    }

    public function getAllUsers()
    {   
        // Acceder a la vista para ver todos los usuarios
        $activo = "1";
        // $usuarios = usuario::all();
        return view('private.admin_usuarios_mostrar',compact('activo'));
    }

    public function getData()
    {
        $usuarios = usuario::all();
        return $usuarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // return "Regresando";
        $usuario = DB::table('personas')
            ->join('usuarios', 'personas.id', '=', 'usuarios.idPersona')
            ->where('usuarios.id', '=', $id)
            ->limit(1)
            ->get();
        return $usuario;
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
        $usuario = new Usuario();
        if($usuario ->where('usuario', '=', $request->input('usuario'))->count() > 0)
        {
            // Significa que actualmente existe ese nombre de usuario
            return "Error";
        } else {
            $persona = persona::find($id);
            $persona->nombre = $request->input('nombre');
            $persona->paterno = $request->input('paterno');
            $persona->materno = $request->input('materno');
            $persona->nacimiento = $request->input('nacimiento');
            
            if($persona->update()) {
                $usuario = usuario::find($id);
                $usuario->usuario = $request->input('usuario');
                $usuario->password = $request->input('password');
                $usuario->update();
                return "Actualizado";
            } else {
                return "Error";
            }
        }
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
        $usuario = Usuario::find($id);
        $idPersona = $usuario->idPersona;
        if($usuario->delete()) {
            $persona = Persona::find($idPersona);
            $persona->delete();
            return "Eliminado";
        } else 
        return "Error";

        
        return $usuario->idPersona;
    }
}
