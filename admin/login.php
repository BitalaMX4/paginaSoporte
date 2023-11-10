<?php
include("../lib/librerias.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte Bitala</title>
    <link rel="shortcut icon" href="../img/logo-ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header class="header">
        <div class="header-content">
            <div class="logo-header">
                <img src="../img/logo.png" alt="logo Bitala">
            </div>
        </div>
    </header>


    <h1></h1>
    <section>
        <div class="formularioo">
            <div class="formulario-imagen">
                <img src="../img/login.jpg" alt="">
            </div>
            <div class="formulario-contenido">
                <h1>Iniciar Sesión</h1>
                <form class="form" id="formulario-login">
                    <div class="formulario-campo">
                        <label for="email">Correo</label>
                        <input type="email" id="email" placeholder="correo@correo.com">
                    </div>
                    <div class="formulario-campo">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" placeholder="contraseña">
                    </div>
                    <input type="submit" class="login" id="login" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="copyright">
            © Bitala 2023
        </div>
        <div class="contact-info">
            <i class="fas fa-envelope"></i>
            <p style="margin-top: 12px;">bitalamx@gmail.com</p>
        </div>
    </footer>

    <script src="../js/script.js"></script>
</script>
</body>

</html>