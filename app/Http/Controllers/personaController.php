<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\persona;
class personaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $datos=new persona();
        $datos->nombre=$request->input('nombre');
        $datos->paterno=$request->input('paterno');
        $datos->materno=$request->input('materno');
        $datos->usuario=$request->input('usuario');
        $datos->password=$request->input('password');
        $datos->tipo=$request->input('tipo');
        $datos->imagen=$request->input('imagen');
        $datos->save();
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $usuarios = persona::all();
        return view('admin_verusuarios', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios = persona::find($id);
        return view('admin_editarusuario', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request )
    {
        $datos= persona::find($id);
        $datos->nombre=$request->input('nombre');
        $datos->paterno=$request->input('paterno');
        $datos->materno=$request->input('materno');
        $datos->usuario=$request->input('usuario');
        $datos->password=$request->input('password');
        $datos->tipo=$request->input('tipo');
        $datos->imagen=$request->input('imagen');
        $datos->save();
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = new persona();
        $user =$user::find($id);
        $user->delete(); 
        return redirect('mostrar_usuarios');
    }
}
