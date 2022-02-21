<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario creación usuario</title>
</head>
<body>
    <form action="{{url('/insertUser')}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('post')}}
        <br><input type="text" name="nombre" id="" placeholder="Nombre...">
        <br><input type="text" name="apellido" id="" placeholder="Apellido... ">
        <br><input type="email" name="correo" id="" placeholder="usuario@dominio.com">
        <br><input type="text" name="telefono" id="" placeholder="numero telefono">
        <br><input type="text" name="direccion1" id="" placeholder="Dirección... ">
        <br><input type="text" name="direccion2" id="" placeholder="Dirección secundaria... ">
        <br><input type="date" name="nacimiento" id="" placeholder="Fecha de nacimiento">
        <br><input type="file" name="foto">
        <br><input type="submit" value="Crear usuario">
    </form>
</body>
</html>