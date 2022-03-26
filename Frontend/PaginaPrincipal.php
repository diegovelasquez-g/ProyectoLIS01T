<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="Css/Contenido.css"><!--Hoja para los estilos del header(Menu) y Footer(Pie de pagina) estara en otras ventanas--> 
    <link rel="stylesheet" href="Css/PGPrincipal.css"><!--Estilos del Section(Seccion de infromacion) solo para esta vanetana--> 
    <script src="JavaScript/Script.js"></script><!--Script para realizar cietras funciones--> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!--incia el encabezado de la ventana--> 
    <header>
        <div id="Logo">
            <img src="Imagenes/Logo.png" alt="Logo">
        </div>
        <div id="Menu">
            <a href="">Inicio</a>
            <a href="QuienesSomos.php">Quienes Somos</a>
            <a href="NuestrosServicios.php">Nuestros Servicios</a>
        </div>
        <div id="Sesion">
            <a href="IniciarSesion.php" target="_blank"> <i class="material-icons">account_circle</i>Iniciar Sesión</a>
        </div>
    </header>
    <!--Termina encabezado de la pagina-->
    <!--inicio de seccion de informacion de la ventana--> 
    <section>
        <div id="Section1"><!--parte izquierda del section--> 
            <br>
            <img src="Imagenes/img01.jpg" alt="Doctores">
            <br><br>
            <p>Personal altamente capacitado para que recibas la mejor atención posible</p>
            <button class="MasInfo" onclick="MasInfo('M1')">Más Información</button>
        </div>
        <div id="Section2"><!--parte derecha del section-->
        <!--Division 1 de la seccion2 Parte de arriba--> 
            <div class="S2Info" id="S2-1">
                <div>
                <img src="Imagenes/img02.jpg" alt="Equipo Medico">
                </div>
                <div style="text-align: center;">
                <br><br><br><br>
                <p>Tecnología de vanguardia para un diagnostico más preciso</p>
                <br><br>
                <button class="MasInfo" onclick="MasInfo('M2')">Más Información</button>
                <br><br>
                </div>            
            </div>
            <!--Division 2 de la seccion2  parte de abajo--> 
            <div class="S2Info">
            <div>
                <img src="Imagenes/img03.jpg" alt="Area Laboratorio">
                </div>
                <div style="text-align: center;">
                <br><br><br><br>
                <p>Área de laboratorio para el análisis de muestras al instante</p>
                <br>
                <button class="MasInfo" onclick="MasInfo('M3')">Más Información</button>
                <br><br>
                </div>
            </div>
        </div>
    </section>
    <!--Ventana modal donde se mostrararn diversos mensajes al usuario--> 
    <div id="Modal" style="display: none;"><!--Para que no se muetre el modal--> 
        <div id="Mensaje">
            <div id="Titulo"><!--Titulo del mensaje--> 
                Medical Arts Clinic
            </div>
            <div id="Message">
                <p id="MessageVer"></p><!--mensaje que se muestra--> 
            </div>
            <div id="Cerrar"><!--Cerrar modal--> 
            <button onclick="MasInfoCerrar()">Entendido</button>
        </div>
        </div>
    </div>
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