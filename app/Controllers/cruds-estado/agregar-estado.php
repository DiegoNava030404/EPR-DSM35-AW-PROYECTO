<?php
require __DIR__ . '/../../../database/conexion.php';

$Nombre = $_POST['Estado'];

$query = "INSERT INTO estado (Nombre) VALUES ('$Nombre')";

$resultado = mysqli_query($enlace, $query);


if ($resultado === true) {
    echo "EL registro  se inserto de manera correcta";
    header("Location:https://localhost/EPR-DSM35-AW-PROYECTO/views/estado/index.php");

} else {
    echo "EL registro no se inserto de manera correcta";
}
//$conn->close();
?>