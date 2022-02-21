<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function crearUser(){
        return view('user.crear');
    }
    public function crearUserPOST(Request $request){

        $datos = $request->except('_token');
        //Con lo de abajo guardamos en un booleano si se ha guardado un archivo en el request que pidamos
        $foto = $request->hasFile('foto');
        if ($foto) {
            $datos['foto'] = $request->file('foto')->store('uploads','public');
        }else{
            //Aqui venimos si no hay ninguna foto a la hora de subir la foto de la persona
            $datos['foto'] = "uploads/perro.jpeg";
        }
        try {
            DB::beginTransaction();
            $id = DB::table('usuarios')->insertGetId([
                'nombre_usuario' => $datos['nombre'],
                'apellido_usuario' => $datos['apellido'],
                'nacimiento_usuario' => $datos['nacimiento'],
                'correo_usuario' => $datos['correo'],
                'foto_usuario' => $datos['foto'],
                'telefono_usuario' => $datos['telefono'],
            ]);
            
            
            DB::table('direcciones')->insert([
                'direccion1' => $datos['direccion1'],
                'direccion2' => $datos['direccion2'],
                'id_user' => $id
            ]);
            
            DB::commit();
        } catch (\Exception $error) {
            DB::rollback();
            return $error -> getMessage();
        }
        return redirect('mostrarUser');

        //return $request;
    }
    public function mostrarUser(){
        $listausers = DB::table('usuarios')->join('direcciones','usuarios.id','=','direcciones.id_user')->select('usuarios.*','direcciones.*')->get();
        return view('user.vista', ['listausers' => $listausers]);
    }
    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
