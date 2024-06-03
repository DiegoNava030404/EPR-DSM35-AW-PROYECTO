<?php
require __DIR__ . '/../../../database/conexion.php';

$id_cat = $_POST['Id_cat'];
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

$query = "UPDATE herramientas SET
Nombre_Herramienta='$nombre', 
No_Serie='$serie',
 Estado='$estado',
  Marca='$marca',
   Ubicacion='$ubicacion',
    Fecha_1er_Mantenimiento='$fecha_1er',
     Fecha_2do_Mantenimiento='$fecha_2do',
      Fecha_Egreso='$fecha_egreso',
       Fecha_Ingreso='$fecha_ingreso',
        Remitente='$remitente',
         Fecha_Compra='$fecha_compra'
         WHERE ID='$id_cat'";

$resultado = mysqli_query($enlace, $query);


if ($resultado === true) {
    echo "EL registro  se inserto de manera correcta";
    header("Location:https://localhost/EPR-DSM35-AW-PROYECTO/views/products/index.php");

} else {
    echo "EL registro no se inserto de manera correcta";
}
//$conn->close();
?>