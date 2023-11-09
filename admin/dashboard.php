<?php
include("../lib/librerias.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Soporte Bitala</title>
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
            <a type="button" class="btn btn-danger" href="./login.php">Cerrar Sesión</a>
        </div>
    </header>
    <div class="container">
        <h1>Dashboard Soporte Bitala</h1>
        <table id="myTable" class="display">
            <thead class="table-primary">
                <tr>
                    <th hidden>Id</th>
                    <th width="150px">Nombre Completo</th>
                    <th>Tipo de Aplicación</th>
                    <th>Correo de Contacto</th>
                    <th width="500px" style="text-align: center;">Mensaje</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

    <footer class="footer"  style="margin-top: 10px; height: 74px;">
        <div class="copyright">
            © Bitala 2023
        </div>
    </footer>

<script src="../js/script.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                responsive: true,
                language: {
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ entradas totales)",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "No se encontraron resultados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });

        obtenerRegistros()
    </script>
</body>

</html>