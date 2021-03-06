<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function anadirCarrito($id)
    {
        $product = DB::select('select * from productos where id='.$id);
        $carrito = session('carrito');
        if (!isset($carrito[$id]['id_producto'])) {
            $carrito[$id] = array(
                "id_producto" => $id,
                "nombre" => $product[0]->nombre_producto,
                "precio" => $product[0]->precio_producto,
                "qty" => 1,
            );
        }else{
            if ($carrito[$id]['id_producto']==$id && $carrito[$id]['qty']!=0) {
                $carrito[$id]['qty'] += 1;
            }
        }
        session()->put('carrito', $carrito);
        //dd(Session::get('cart'));

        return redirect('inicio');
    }
    public function eliminarCarrito($id){
        $carrito = session('carrito');
        
        if ($carrito[$id]['id_producto']==$id) {
            $carrito[$id]['qty'] -= 1;
        }
        
        session()->put('carrito', $carrito);
        //dd(Session::get('cart'));

        return redirect('inicio');
    }
    
    
    public function limpiarCarrito()
    {
        session()->forget('carrito');

        return redirect('inicio');
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
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }

    public function inicio(){
        $producto = DB::table('productos')->select('*')->get();
        $n_producto = DB::table('productos')->where('novedad_producto', '=', '1')->select('*')->get();
        return view('inicio', compact('producto', 'n_producto'));
    }

    public function crear(){
        return view('/admin/crear');
    }
}
