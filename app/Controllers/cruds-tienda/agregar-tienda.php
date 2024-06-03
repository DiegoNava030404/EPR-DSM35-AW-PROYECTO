<?php
require __DIR__ . '/../../../database/conexion.php';

//$ID_Producto = $_POST['ID_Producto'];
$Nombre = $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$ID_Estado = $_POST['Estado'];

$query = "INSERT INTO Tienda (Nombre, Telefono, Correo, ID_Estado) VALUES ('$Nombre', '$Telefono', '$Correo', '$ID_Estado')";

$resultado = mysqli_query($enlace, $query);


if ($resultado === true) {
    echo "EL registro  se inserto de manera correcta";
    header("Location:https://localhost/EPR-DSM35-AW-PROYECTO/views/tienda/index.php");

} else {
    echo "EL registro no se inserto de manera correcta";
}
//$conn->close();
?>