<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Soporte Bitala</title>
    <link rel="shortcut icon" href="img/logo-ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
</head>

<body>
<header class="header">
        <div class="header-content">
            <div class="logo-header">
                <img src="../img/logo.png" alt="logo Bitala">
            </div>
            <a type="button" class="btn btn-danger" href="./login.php">Cerrar Sesión</a>
        </div>
    </header>
    <div class="container">
        <h1>Dashboard Soporte Bitala</h1>
        <table id="myTable" class="display">
            <thead class="table-primary">
                <tr>
                    <th>Nombre Completo</th>
                    <th>Tipo de Aplicación</th>
                    <th>Correo de Contacto</th>
                    <th width="500px">Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>Móvil</td>
                    <td>johndoe@email.com</td>
                    <td>Necesito ayuda con problemas de inicio de sesión en la aplicación móvil.</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>Escritorio</td>
                    <td>janesmith@email.com</td>
                    <td>Mi aplicación de escritorio se cierra inesperadamente, ¿cómo puedo solucionarlo?</td>
                </tr>
                <tr>
                    <td>Mike Johnson</td>
                    <td>Web</td>
                    <td>mikejohnson@email.com</td>
                    <td>No puedo acceder a mi cuenta bancaria a través del sitio web, ¿pueden ayudarme?</td>
                </tr>
                <tr>
                    <td>Laura Brown</td>
                    <td>Móvil</td>
                    <td>laurabrown@email.com</td>
                    <td>Problemas con la sincronización de datos de salud en la aplicación móvil.</td>
                </tr>
                <tr>
                    <td>David Garcia</td>
                    <td>Escritorio</td>
                    <td>davidgarcia@email.com</td>
                    <td>La aplicación de escritorio no muestra correctamente las reservas realizadas.</td>
                </tr>
                <tr>
                    <td>Sara Martinez</td>
                    <td>Web</td>
                    <td>saramartinez@email.com</td>
                    <td>Problemas para acceder a los módulos de cursos en el sitio web.</td>
                </tr>
                <tr>
                    <td>Chris Adams</td>
                    <td>Móvil</td>
                    <td>chrisadams@email.com</td>
                    <td>La aplicación móvil de entretenimiento reproduce videos de manera irregular.</td>
                </tr>
                <tr>
                    <td>Emily Wilson</td>
                    <td>Web</td>
                    <td>emilywilson@email.com</td>
                    <td>Problemas al realizar pedidos a través del sitio web de comida.</td>
                </tr>
                <tr>
                    <td>Kevin Lee</td>
                    <td>Escritorio</td>
                    <td>kevinlee@email.com</td>
                    <td>No se actualizan los resultados de los partidos en tiempo real en la aplicación de escritorio de deportes.</td>
                </tr>
                <tr>
                    <td>Mia Rodriguez</td>
                    <td>Móvil</td>
                    <td>miarodriguez@email.com</td>
                    <td>La aplicación móvil de moda muestra errores al intentar realizar compras.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="footer"  style="margin-top: 10px;">
        <div class="copyright">
            © Bitala 2023
        </div>
    </footer>


    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                responsive: true,
                language: {
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });
    </script>
</body>

</html>