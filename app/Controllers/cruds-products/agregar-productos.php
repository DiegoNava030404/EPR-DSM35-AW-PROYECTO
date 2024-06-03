<?php
require __DIR__ . '/../../../database/conexion.php';

//$ID_Producto = $_POST['ID_Producto'];
$nombre = $_POST['NombreHerramienta'];
$serie = $_POST['Serie'];
$estado = $_POST['Estado'];
$marca = $_POST['Marca'];
$ubicacion = $_POST['NuevaUbicacion'];
$fecha_1er = $_POST['fecha_1er'];
$fecha_2do = $_POST['fecha_2do'];
$fecha_egreso = $_POST['fecha_egreso'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$remitente = $_POST['remitente'];
$fecha_compra = $_POST['fecha_compra'];

$query = "INSERT INTO herramientas (Nombre_Herramienta, No_Serie, Estado, Marca, Ubicacion, Fecha_1er_Mantenimiento, Fecha_2do_Mantenimiento, Fecha_Egreso, Fecha_Ingreso, Remitente, Fecha_Compra)
 VALUES ('$nombre', '$serie', '$estado', '$marca', '$ubicacion', '$fecha_1er', '$fecha_2do', '$fecha_egreso', '$fecha_ingreso', '$remitente', '$fecha_compra')";

$resultado = mysqli_query($enlace, $query);


if ($resultado === true) {
    echo "EL registro  se inserto de manera correcta";
    header("Location:https://localhost/EPR-DSM35-AW-PROYECTO/views/products/index.php");

} else {
    echo "EL registro no se inserto de manera correcta";
}
//$conn->close();
?>