<?php
include __DIR__ . '/../../../database/conexion.php';

$id_cat = $_REQUEST['id_cat'];

$query = "DELETE FROM ubicacion WHERE ID='$id_cat'";

$resultado = mysqli_query($enlace, $query);


if ($resultado === true) {
    echo "EL registro  se eliminó de manera correcta";
    header("Location:./../../../views/categoria/index.php");
} else {
    echo "EL registro no se eliminó de manera correcta";
}
//$conn->close();a
?>