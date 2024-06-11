<?php 
include __DIR__ . '/../../layout/menu.php'; 
include __DIR__ . '/../../layout/header.php';
?>

<div class="card-body">
  <form action="./../../app/Controllers/cruds-sales/edit.php" method="POST">
    <?php
    $id_cat = $_GET["id_cat"];
    include('./../../database/conexion.php');
    $sql = $enlace->query("SELECT * FROM consumibles WHERE ID = '$id_cat'");
    while ($row = $sql->fetch_assoc()) {
      $id_cat = $row['ID'];
      $nombre_cat = $row['Nombre'];
      $tipo_material_cat = $row['Tipo_Material'];
      $cantidad_cat = $row['Cantidad'];
      $fecha_entrada_cat = $row['Fecha_Entrada_Almacen'];
      $fecha_salida_cat = $row['Fecha_Salida_Almacen'];
      $proveedor_cat = $row['Proveedor'];
      $descripcion_cat = $row['Descripcion'];
      ?>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nombre del Consumible</label>
      <input type="hidden" class="form-control" name="Id_cat" value="<?php echo $id_cat; ?>">
      <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $nombre_cat ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tipo de Material</label>
      <input type="text" class="form-control" name="Material" id="Material" value="<?php echo $tipo_material_cat ?>">
    </div>
   
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Cantidad</label>
      <input type="number" class="form-control" name="Cantidad" id="Cantidad" value="<?php echo $cantidad_cat ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha de Entrada al Almacen</label>
      <input type="date" class="form-control" name="Fecha_Entrada" id="Fecha_Entrada" value="<?php echo $fecha_entrada_cat ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha de Salida del Almacen</label>
      <input type="date" class="form-control" name="Fecha_Salida" id="Fecha_Salida" value="<?php echo $fecha_salida_cat ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Proveedor</label>
      <input type="text" class="form-control" name="Proveedor" id="Proveedor" value="<?php echo $proveedor_cat ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Descripcion</label>
      <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="<?php echo $descripcion_cat ?>">
    </div>

    </div>
    <div class="mb-3">
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