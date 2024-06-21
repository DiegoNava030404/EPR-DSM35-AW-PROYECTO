<?php
require __DIR__ . '/../../../database/conexion.php';

$nombre_cat = $_POST['Nombre'];
$tipo_material_cat = $_POST['Material'];
$cantidad_cat = $_POST['Cantidad'];
$fecha_entrada_cat = $_POST['Fecha_Entrada'];
$fecha_salida_cat = $_POST['Fecha_Salida'];
$proveedor_cat = $_POST['Proveedor'];
$descripcion_cat = $_POST['Descripcion'];

$query = "INSERT INTO consumibles (Nombre, Tipo_Material, Cantidad, Fecha_Entrada_Almacen, Fecha_Salida_Almacen, Proveedor, Descripcion) VALUES 
('$nombre_cat', '$tipo_material_cat', '$cantidad_cat', '$fecha_entrada_cat', '$fecha_salida_cat', '$proveedor_cat', '$descripcion_cat')";

$resultado = mysqli_query($enlace, $query);


if ($resultado === true) {
    echo "EL registro  se inserto de manera correcta";
    header("Location:https://localhost/EPR-DSM35-AW-PROYECTO/views/sales/index.php");

} else {
    echo "EL registro no se inserto de manera correcta";
}
//$conn->close();
?>