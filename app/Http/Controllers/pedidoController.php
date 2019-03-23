<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\pedido;

class pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activo = "3";
        return view('private.admin_pedidos_registros',compact('activo'));
        // $pedidos = DB::table('pedidos')
        //         ->join('productos', 'pedidos.idProducto', '=', 'productos.id')
        //         ->join('personas', 'pedidos.idUsuario', '=', 'personas.id')
        //         ->select('personas.nombre', 'productos.producto', 'pedidos.cantidad', 'pedidos.total', 'pedidos.id')
        //         ->get();
            
        // // Vista de registros agregados a la BD
        // // $pedidos = Pedido::all();
        // return view('admin_pedidos', compact('pedidos'));
    }

    public function getData()
    {
        $pedidos = DB::table('pedidos')
                ->join('productos', 'pedidos.idProducto', '=', 'productos.id')
                ->join('personas', 'pedidos.idUsuario', '=', 'personas.id')
                ->select('personas.nombre', 'productos.producto', 'pedidos.cantidad', 'pedidos.total', 'pedidos.id')
                ->get();

        return $pedidos;
    }

    public function getSpecificData($id)
    {
        $pedidos = DB::table('pedidos')
                ->join('productos', 'pedidos.idProducto', '=', 'productos.id')
                ->join('usuarios', 'pedidos.idUsuario', '=', 'usuarios.id')
                ->join('personas', 'personas.id', '=', 'usuarios.idPersona')
                ->where('pedidos.id', '=', $id)
                ->select('personas.nombre', 'personas.paterno', 'personas.materno', 'usuarios.imagen', 'productos.producto', 'pedidos.cantidad', 'pedidos.total', 'pedidos.id', 'pedidos.created_at')
                ->get();

        return $pedidos;
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
        $pedidos = DB::table('pedidos')
            ->join('productos', 'pedidos.idProducto', '=', 'productos.id')
            ->join('personas', 'pedidos.idUsuario', '=', 'personas.id')
            ->select('personas.nombre', 'personas.imagen', 'productos.producto', 'pedidos.cantidad', 'pedidos.total', 'pedidos.id', 'pedidos.created_at')
            ->where('pedidos.id', '=', $id)
            ->get();
        return $pedidos;
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
