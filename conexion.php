<?php
$conexion = mysqli_connect("127.0.0.1", "root", "", "tesoreria");

if (!$conexion) {
    echo "Error: No se pudo conectar a la Base de Datos." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a la Base de Datos!" . PHP_EOL;

mysqli_close($conexion);
?>
