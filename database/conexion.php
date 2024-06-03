<?php
$enlace = mysqli_connect("localhost", "root", '', "ALMACEN");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    exit;
}

echo "Éxito: se realizó una conexion apropiada a MySQL! La base de datos SEEIT es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
?>

























































