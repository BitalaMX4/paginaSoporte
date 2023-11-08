<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte Bitala</title>
    <link rel="shortcut icon" href="img/logo-ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                        <input type="password" id="password" placeholder="correo@correo.com">
                    </div>
                        <a type="submit" class="login" id="login" href="./dashboard.php">Iniciar Sesión</a>
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

    <script src="js/script.js"></script>

</body>

</html>