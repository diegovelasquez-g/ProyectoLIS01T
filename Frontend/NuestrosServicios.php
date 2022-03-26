<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Servicios</title>
    <link rel="stylesheet" href="Css/Contenido.css"><!--Hoja para los estilos del header(Menu) y Footer(Pie de pagina) estara en otras ventanas-->
    <link rel="stylesheet" href="Css/PGServicios.css"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!--incia el encabezado de la ventana--> 
    <header>
        <div id="Logo">
            <img src="Imagenes/Logo.png" alt="Logo">
        </div>
        <div id="Menu">
            <a href="PaginaPrincipal.php">Inicio</a>
            <a href="QuienesSomos.php">Quienes Somos</a>
            <a href="">Nuestros Servicios</a>
        </div>
        <div id="Sesion">
            <a href="IniciarSesion.php" target="_blank"> <i class="material-icons">account_circle</i>Iniciar Sesión</a>
        </div>
    </header>
    <!--Termina encabezado de la pagina-->
    <!--inicio de seccion de informacion de la ventana-->
    <section>
        <hr>
        <div id="Titulo">
            <br>
            <h2>Nuestros Servicios</h2>
        </div>
        <div id="Servicios">
            <div>
                <br><br><br>
                <img src="Imagenes/img04.jpg" alt="">
                <br>
                <br>
                <p>Contamos con una variedad de especialidades para que puedas realizar todos tus exámenes y consultas con nosotros.</p>
            </div>
            <div>
                <br><br><br>
                <img src="Imagenes/img05.jpg" alt="">
                <br>
                <br>
                <p>Amplio parqueo para que puedas llegar con tu vehículo a nuestras instalaciones.</p>
            </div>
        </div>
        <br>
    </section>
    <!--incia el pie de pagina--> 
    <footer>
        <!--parte izquierda--> 
        <div id="Pie1">
        Síguenos en nuestras redes oficiales para conocer más sobre nosotros y nuestras promociones
        </div>
        <!--parte derecha--> 
        <div id="Pie2">
            <div id="Redes">
            <div>
                <img src="Imagenes/youtube.png" alt="Logo Youtube" class="Icono" style="width:80px; height:45px">
                <h3>Youtube</h3>
            </div>
            <div>
                <img src="Imagenes/facebook.png" alt="Logo Facebook" style="width:80px; height: 45px;">
                <h3>Facebook</h3>
            </div>
            <div>
                <img src="Imagenes/Instagram.png" alt="Logo Facebook" style="width:80px; height: 45px;">
                <h3>Instagram</h3>
            </div>
            </div>
            <div id="Contacto">
                <div>
                    Información de contacto
                    <br><br>
                    <i style="display: flex;align-items: center;"><i class="material-icons">email</i>clinica@gmail.com</i>
                    <br>
                    <i style="display: flex;align-items: center;"><i class="material-icons">call</i>(503) 2245-7000</i>
                </div>
            </div>
        </div>
        <!--Parte final pie de pagina--> 
        <div id="Pie3">
        Copyright © 2022 UDB Virtual. Todos los derechos reservados
        </div>
    </footer>
</body>
</html>