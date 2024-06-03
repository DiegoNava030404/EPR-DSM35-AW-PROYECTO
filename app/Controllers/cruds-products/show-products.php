<?php
include __DIR__ . '/../../../database/conexion.php';
//include('./../../databases/conexion.php');

$id_cat = $_GET['id_cat'];
//$nombre_cat = $_GET['NombreHerramienta'];
// $serie_cat = $_GET['Serie'];
// $estado_cat = $_GET['Estado'];
// $marca_cat = $_GET['Marca'];
// $ubicacion_cat = $_GET['NuevaUbicacion'];
// $fecha_1er_cat = $_GET['fecha_1er'];
// $fecha_2do_cat = $_GET['Fecha_2do'];
// $fecha_egreso_cat = $_GET['fecha_egreso'];
// $fecha_ingreso_cat = $_GET['fecha_ingreso'];
// $remitente_cat = $_GET['remitente'];
// $fecha_compra_cat = $_GET['fecha_compra'];

// $nombre = $_GET['NombreHerramienta'];
// $serie = $_GET['Serie'];
// $estado = $_GET['Estado'];
// $marca = $_GET['Marca'];
// $ubicacion = $_GET['NuevaUbicacion'];
// $fecha_1er = $_GET['fecha_1er'];
// $fecha_2do = $_GET['fecha_2do'];
// $fecha_egreso = $_GET['fecha_egreso'];
// $fecha_ingreso = $_GET['fecha_ingreso'];
// $remitente = $_GET['remitente'];
// $fecha_compra = $_GET['fecha_compra'];

$query = "SELECT * FROM  herramientas WHERE ID='$id_cat'";

$resultado = mysqli_query($enlace, $query);

//$conn->close();
?>