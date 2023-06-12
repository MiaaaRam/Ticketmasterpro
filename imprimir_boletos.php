<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletos</title>
    <link rel='icon' href='icono.ico' type='image/x-ico'>
<!-- Es css para la tabla de los boletos -->
<style>
    table {
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 10px;
    }
</style>
</head>
<body>
    <?php
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $artista = $_GET['artista'];
        $zona = $_GET['zona'];
        $boletos = $_GET['boletos'];
        $recinto = $_GET['recinto'];
        $extras = $_GET['extras'];
        $fecha = $_GET['fecha'];
        echo "<h1 align='center'>Boletos para $artista</h1>";
        echo "<br><br>";
        for ($i = 0; $i < $boletos; $i++) {
            echo "<table align='center'>";
            echo "<tr>";
            echo "<td colspan='3'>Boletos para $artista</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><img src='$artista.jpg' alt='$artista' height='200px' width='200px'></td>";
            echo "<td>Nombre: $nombre<br>Apellido: $apellido</td>";
            echo "<td>Fecha: $fecha</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='3'>Zona: $zona<br>Recinto: $recinto</td>";
            echo "</tr>";
            echo "</table>";
            echo "<br>";
        }
    ?>
</body>
</html>
