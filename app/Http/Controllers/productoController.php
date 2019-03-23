<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\producto;
use App\image;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activo = "2";
        return view('private.admin_producto_nuevo',compact('activo'));
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

    public function getAllProducts()
    {
        $activo = "2";
        // $productos = Producto::all();
        return view('private.admin_producto_mostrar',compact('activo'));
    }

    public function getData()
    {
        $productos = DB::table('productos')
            ->join('images', 'productos.imgPrincipal', '=', 'images.id')
            ->select('productos.id', 'productos.precio', 'productos.producto', 'productos.description', 'productos.descuento', 'images.imagen')
            ->get();
        return $productos;
    }

    public function getSpecificData($id)
    {
        $productos = DB::table('productos')
            ->join('images', 'productos.imgPrincipal', '=', 'images.id')
            ->select('productos.id', 'productos.precio', 'productos.producto', 'productos.description', 'productos.descuento', 'images.imagen')
            ->get();
        return $producto;
    }

    public function getExtraImages($id)
    {
        // Obtener la imagen principal a evitar
        $image = Producto::find($id);

        $images = DB::table('images')
            ->join('productos', 'images.idProducto', '=', 'productos.id')
            ->where('productos.id', '=', $id)
            ->where('images.id', '!=', $image->imgPrincipal)
            ->select('images.id', 'images.imagen', 'productos.imgPrincipal')
            ->get();
        return $images;
    }

    public function getImages($id)
    {
        $images = DB::table('images')
            ->join('productos', 'images.idProducto', '=', 'productos.id')
            ->where('productos.id', '=', $id)
            ->select('images.id', 'images.imagen', 'productos.imgPrincipal')
            ->get();
        return $images;
    }

    public function changePrincipal($id, Request $request)
    {
        // return $request->input('0'); Valor de la imagen nueva
        $producto = Producto::find($id);
        $producto->imgPrincipal = $request->input('0');
        $producto->update();
    }

    public function setExtraImage($id, Request $request)
    {
        // 
        if($request->hasFile('file')) {
            // Inicio: Datos de la imagen
            $file = $request->file('file');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/productos/',$nombre);
            // Fin: Datos de la imagen

            // Inicio: Guardar la imagen
            $image = new Image();
            $image->imagen = $nombre;
            $image->idProducto = $id;
            $image->save();
            // Fin: Guardar la imagen
            return "Success";
        } else 
            return "Error";
    }

    public function deleteExtraImage($id)
    {
        $image = Image::find($id);
        if($image->delete()){
            $file_path = public_path() . "/productos/$image->imagen";
            \File::delete($file_path);
            return "Eliminado";
        }
        else
            return "Error";
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

            // Inicio: Datos de la imagen
            $file = $request->file('imagen');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/productos/',$nombre);
            // Fin: Datos de la imagen

            // Inicio: Guardar datos del producto, excepto la imagen
            $producto = new Producto();
            
            $slug = time().$request->input('nombre');
            $producto->slug = $slug;
            $producto->producto = $request->input('nombre');
            $producto->precio = $request->input('precio');
            $producto->description = $request->input('description');
            $producto->descuento = '0';
            $producto->cantidad = '0';
            $producto->save();
            // Fin: Guardar datos del producto, excepto la imagen

            // Inicio: Guardar la imagen
            $image = new Image();
            $image->imagen = $nombre;
            $image->idProducto = $producto->id;
            $image->save();
            // Fin: Guardar la imagen

            // Inicio: Actualizar producto para agregar imagen principal
            $producto = Producto::find($producto->id);
            $producto->imgPrincipal = $image->id;
            $producto->update();
            // Fin: Actualizar producto para agregar imagen principal


        } else {
            // No se ha mandado una imagen

            // Inicio: Guardar datos del producto, excepto la imagen
            $producto = new Producto();
            
            $slug = time().$request->input('nombre');
            $producto->slug = $slug;
            $producto->producto = $request->input('nombre');
            $producto->precio = $request->input('precio');
            $producto->description = $request->input('description');
            $producto->descuento = '0';
            $producto->cantidad = '0';
            $producto->save();
            // Fin: Guardar datos del producto, excepto la imagen

            // Inicio: Guardar la imagen
            $image = new Image();
            $image->imagen = "default.png";
            $image->idProducto = $producto->id;
            $image->save();
            // Fin: Guardar la imagen

            // Inicio: Actualizar producto para agregar imagen principal
            $producto = Producto::find($producto->id);
            $producto->imgPrincipal = $image->id;
            $producto->update();
            // Fin: Actualizar producto para agregar imagen principal
        }

        return redirect('/producto');
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
        $producto = Producto::find($id);
        $producto->producto = $request->input('producto');
        $producto->precio = $request->input('precio');
        $producto->description = $request->input('description');
        if($producto->update())
            return "Success";
        else 
            return "Error";
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
        $producto = Producto::find($id);
        if($producto->delete()) {
            return "Success";
        } else {
            return "Error";
        }
    }
}
