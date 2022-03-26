<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="CSS/PGSesion.css">
    <script src="JavaScript/Script2.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <div Id="Fondo">
        <div id="VentanaSesion">
            <div id="Sesion1">
                <div id="Credenciales">
                    <form method="post">
                        <img src="Imagenes/Logo.png" alt="logo">
                        <br>
                        <h2>Iniciar Sesión</h2>
                        <br>
                        <input type="text" name="usuario" class="datos" placeholder="Correo electronico">
                        <br><br><br>
                        <input type="password" name="contraseña" class="datos" placeholder="Contraseña">
                        <br>
                        <br>
                        <br>
                        <input type="submit" value="Acceder" id="BtnSesion">
                    </form>
                </div>  
                <div id="OpcionesSesion" onclick="OpSesionAbrir()">
                <i class='fas fa-key'></i>&nbsp;Opciones de inicio de sesión
                </div>     
            </div>
            <div id="Sesion2">
                <img src="Imagenes/Logo.png" alt="Logo">
                <br><br>
                <h2>Opciones de inicio de sesión</h2>
                <br><br>
                <button id="Google"><i class='fab fa-google'></i><i>Iniciar sesión con Google</i><i class="material-icons" onclick="AyudaModal()" style="cursor: pointer;">help</i></button>
                <br><br>
                <button id="Atras" onclick="OpSesionCerrar()">Atras</button>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div id="Ayuda" style="display: none;">
        <div>
            <br>
            <i class='fab fa-google'></i>&nbsp;Iniciar sesión con Google
            <br>
            <br>
            <p>Para usar esta opción, es necesario haber vinculado anteriormente la cuenta de Google a su cuenta de empresa</p>
            <button onclick="AyudaModalCerrar()">Cerrar</button>
        </div>
    </div>
</body>
</html>