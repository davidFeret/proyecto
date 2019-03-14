<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\producto;

class productoController extends Controller
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
        // Vista de formulario para agregar registro
        return view('admin_producto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Revisar si se ha mandado una imagen
        if($request->hasFile('imagen')) {
            // Sí se ha mandado una imagen
            $file = $request->file('imagen');
            $nombre = time().$file->getClientOriginalName();

            $file->move(public_path().'/productos/',$nombre);
        } else {
            $nombre = "default.png";
        }

        $slug = time().$request->input('nombre');
        
        $producto = new Producto();

        $producto->slug = $slug;
        $producto->producto = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->descuento = '0';
        $producto->cantidad = '0';
        $producto->imagen = $nombre;
        $producto->description = $request->input('description');
        $producto->slug = $request->input($slug);


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
