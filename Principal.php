<?php
include 'ConexionBD/Conexion.php';
$productos = "SELECT * FROM productos WHERE id <= 4";
$resultado = $conexion->query($productos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2c4007a4a1.js" crossorigin="anonymous"></script> <!--IconosRedes-->
    <link rel="stylesheet" href="SliderImg/Slider.css">
    <link rel="stylesheet" href="General.css">
    <link rel="stylesheet" href="MenuPulpas.css">
    <title>Nutripulp</title>
</head>
<body>
<header> 
    <img src="Logo.png" width="250px" height="165px"> 
    <form action="" method="GET">
        <input id="busqueda" type="search" placeholder="Buscar" name="busqueda">
    </form>
        <nav>
            <a href="">Yos Valpuesta</a>
            <a href="">Mis compras</a>
            <a href="MenuPulpas.html">Menú</a>
            <a href="MiCarrito.php"><img src="Carrito.png" alt="" width="40px" height="40px"></a>
        </nav>
</header>
    <div class = "slider">
        <ul>
            <li><img src="SliderImg/Slider1.jpg" alt=""></li>
            <li><img src="SliderImg/Slider2.jpg" alt=""></li>
            <li><img src="SliderImg/Slider3.jpg" alt=""></li>
            <li><img src="SliderImg/Slider4.jpg" alt=""></li>
        </ul>
    </div>

    <h1>Productos más vendidos</h1>
    <?php
        while ($mostrar = $resultado->fetch_assoc()) { 
    ?>
        <div class = "galeria" >
            <div class = "foto">
                <img width="130px" height="90px" src="data:image/png;base64,<?php echo base64_encode($mostrar["Imagen"]); ?>">
            </div>
            <div class = "datos">
                <p>1Lt <?php echo $mostrar["Nombre"]; ?></p>
                <p>$<?php echo $mostrar["Precio"]; ?></p> 
            </div>
        </div>
    <?php
        } 
    ?>
    
    <footer>
        <div class="grupo1">
            <div class="box">
                <center><h2>Contacto</h2></center>
                <p>Whatsapp: 5575625202
                   Telefono: 55 5603 3859</p>
                <p>Email: ventas@nutripulp.com</p>
            </div>
            <div class="box">
                <h2>SIGUENOS EN REDES</h2>
                <div class="redes">
                    <a href="https://www.facebook.com/nutripulpmx" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/nutripulp/" target="_blank" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/NutriPulp" target="_blank" class="fa fa-twitter"></a>
                </div>
            </div>
        </div>
        <div class="grupo2">
            <small>&copy; 2022 <b>Nutripulp</b> -Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
</html>