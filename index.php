<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte Bitala</title>
    <link rel="shortcut icon" href="img/logo-ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
    <header class="header">
        <div class="logo-header">
            <img src="img/logo.png" alt="logo Bitala">
        </div>
    </header>

    <h1>Soporte Bitala</h1>
    <section>
        <div class="formularioo">
            <div class="formulario-imagen">
                <img src="img/programador.jpeg" alt="">
            </div>
            <div class="formulario-contenido">
                <form class="form" id="formulario">
                    <h2>Contacto</h2>
                    <div class="formulario-campo">
                        <label for="nombre">Nombre completo</label>
                        <input type="text" id="nombre" required>
                    </div>
                    <div class="formulario-campo">
                        <label for="tipo-aplicacion">Tipo de aplicación</label>
                        <select id="tipo-aplicacion">
                            <option value="" disabled selected>--Seleciona una opción--</option>
                            <option value="Movil">Móvil</option>
                            <option value="Web">Web</option>
                            <option value="Escritorio">Escritorio</option>
                        </select>
                    </div>
                    <div class="formulario-campo">
                        <label for="email">Correo de contacto</label>
                        <input type="email" id="email" placeholder="correo@correo.com">
                    </div>
                    <div class="formulario-campo">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" rows="4"></textarea>
                    </div>
                    <input type="submit" class="formulario-enviar" id="enviar">
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
            <p>bitalamx@gmail.com</p>
        </div>
    </footer>

    <script src="js/script.js"></script>

</body>

</html>