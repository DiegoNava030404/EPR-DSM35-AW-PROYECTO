<?php 
require __DIR__ . '/../../../database/conexion.php';

$id_cat = $_POST['Id_cat'];
$nombre_cat = $_POST['Nombre'];
$tipo_material_cat = $_POST['Material'];
$cantidad_cat = $_POST['Cantidad'];
$fecha_entrada_cat = $_POST['Fecha_Entrada'];
$fecha_salida_cat = $_POST['Fecha_Salida'];
$proveedor_cat = $_POST['Proveedor'];
$descripcion_cat = $_POST['Descripcion'];

$query = "UPDATE consumibles SET
Nombre = '$nombre_cat',
Tipo_Material = '$tipo_material_cat',
Cantidad = '$cantidad_cat',
Fecha_Entrada_Almacen = '$fecha_entrada_cat',
Fecha_Salida_Almacen = '$fecha_salida_cat',
Proveedor = '$proveedor_cat',
Descripcion = '$descripcion_cat'
WHERE ID = '$id_cat'";


$resultado = mysqli_query($enlace, $query);


if ($resultado === true) {
    echo "EL registro  se inserto de manera correcta";
    header("Location:https://localhost/EPR-DSM35-AW-PROYECTO/views/sales/index.php");

} else {
    echo "EL registro no se inserto de manera correcta";
}
//$conn->close();
?>