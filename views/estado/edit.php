<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<div class="card-body">
<form action="./../../app/Controllers/cruds-products/agregar-productos.php" method="POST">

<?php
    include('./../../database/conexion.php');
    $sql = $enlace->query("select * from estado");
    while ($row = $sql->fetch_assoc()) {
    $id_cat = $row['ID'];
    $nombre_cat = $row['Nombre'];
?>


<div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Estado en el que se encuentra la Herramienta</label>
        <input type="hidden" class="form-control" name="Id_cat" value="<?php echo $id_cat; ?>">
        <input type="text" class="form-control" name="Estado" id="Estado" value="<?php echo $nombre_cat ?>">
      </div>

  <?php
    }
  ?>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>


<?php
include __DIR__ . '/../../layout/footer.php';
?>