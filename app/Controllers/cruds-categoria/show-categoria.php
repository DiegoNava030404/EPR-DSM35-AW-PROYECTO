<?php
include __DIR__ . '/../../../database/conexion.php';
//include('./../../databases/conexion.php');

$id_cat = $_GET['id_cat'];

$query = "SELECT * FROM ubicacion WHERE ID='$id_cat'";

$resultado = mysqli_query($enlace, $query);

//$conn->close();
?>