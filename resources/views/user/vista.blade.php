<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de users</title>
</head>
<body>
    @if (session()->has('carrito'))
        <?php
            $data = session()->all();
            print_r($data['carrito']);
        ?>
    @endif
    <div>
        <a href="{{ url('/limpiarCarrito') }}">Vaciar carrito</a>
    </div>
    

    <br>
    LISTA DE USERS
    <table border="1">
        <tr>
            <th>ID usuario</th>
            <th>Nombre usuario</th>
            <th>Apellido usuario</th>
            <th>Correo usuario</th>
            <th>Nacimiento usuario</th>
            <th>Foto usuario</th>
            <th>Direccion usuario</th>
            <th>Direccion secundaria usuario</th>
            <th>Telefono usuario</th>
            <th>Añadir al carrito</th>
            <th>Eliminar usuario</th>
        </tr>
        <tr>
@forelse ($listausers as $user)
    
        <td>{{$user->id}}</td>
        <td>{{$user->nombre_usuario}}</td>
        <td>{{$user->apellido_usuario}}</td>
        <td>{{$user->correo_usuario}}</td>
        <td>{{$user->nacimiento_usuario}}</td>
        <td><img src="storage/{{$user->foto_usuario}}" alt="" width="100px" height="100px"></td>
        <td>{{$user->direccion1}}</td>
        <td>{{$user->direccion2}}</td>
        <td>{{$user->telefono_usuario}}</td>
        <td>
            <a href="{{url('/addSesion/'.$user->id)}}">Agregar 1 {{$user->nombre_usuario}} al carrito</a>
        </td>
        <td>
            <a href="{{url('/removeSesion/'.$user->id)}}">Eliminar 1 {{$user->nombre_usuario}} del carrito</a>
        </td>
       
        
    
</tr>
@empty
    <p>No hay mas</p>
@endforelse

<form action="{{url('/crearUser')}}" method="get">
    {{method_field('get')}}
   <br><input type="submit" value="Generar persona">
</form>

   
</html>

<?php