<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM KING - Tienda Oficial</title>
    <link rel="stylesheet" href="../resources/css/style_inicio.css">
    <link rel="stylesheet" href="../resources/css/all.css">
    <link rel="shortcut icon" href="../uploads/img/logoo.png" type="image/x-icon">
    <script src="../resources/js/all.js"></script>
    <!--<script src="../resources/js/code.js"></script>-->
</head>
<body>
    <div class="info">
        Envíos gratis en pedidos superiores a 35€ <i class="fas fa-truck"></i>
    </div>
    <div class="barra_tareas">
        <img class="img_button_barra" src="../uploads/img/bar_button2.png">
        <img class="img_barra" src="../uploads/img/logo2.png">
        <h2 class="ttl">GYM KING</h2>
        <form class="form">
            <input class="input_form" type="text" name="buscador" placeholder="Buscar...">
        </form>
        <a href="#"><h3><i class="fas fa-question-circle"></i> Ayuda</h3></a>
        <h3><a href="#">Iniciar sesión</a></h3>
        <h3>|</h3>
        <h3><a href="#">Registrarse</a></h3>
        <a href="#"><i class="fas fa-shopping-cart carrito"></i></a>
    </div>
    <div>
        <div class="contenido_inicio">
            <div class="novedades">
                <h2 class="ttl_novedades">Novedades!</h2>
                @foreach ($n_producto as $item)
                    <div class="producto">
                        <img class="img_producto" src="../uploads/img/{{$item->foto_producto}}">
                        <h3>{{$item->nombre_producto}}</h3>
                    </div>
                @endforeach
            </div>
            <div class="productos">
                <h2 class="ttl_novedades">Productos</h2>
                @foreach ($producto as $item)
                    <div class="producto">
                        <img class="img_producto" src="../uploads/img/{{$item->foto_producto}}">
                        <h3>{{$item->nombre_producto}}</h3>
                        <button>Añadir</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <footer>
        <h2>Footer</h2>
    </footer>
</body>
</html>