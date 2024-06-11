<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<div class="card-body">
  <form action="./../../app/Controllers/cruds-products/edit.php" method="POST">

    <?php
    $id_cat = $_GET["id_cat"];
    include('./../../database/conexion.php');
    $sql = $enlace->query("SELECT * FROM herramientas WHERE ID = '$id_cat'");

    while ($row = $sql->fetch_assoc()) {
      $id_cat = $row['ID'];
        $nombre_cat = $row['Nombre_Herramienta']; 
          $serie_cat = $row['No_Serie'];
            $estado_cat = $row['Estado'];
              $marca_cat = $row['Marca'];
                $ubicacion_cat = $row['Ubicacion'];
                  $fecha_1er_cat = $row['Fecha_1er_Mantenimiento'];
                    $fecha_2do_cat = $row['Fecha_2do_Mantenimiento'];
                      $fecha_egreso_cat = $row['Fecha_Egreso'];
                        $fecha_ingreso_cat = $row['Fecha_Ingreso'];
                          $remitente_cat = $row['Remitente'];
                            $fecha_compra_cat = $row['Fecha_Compra'];
    ?>
    

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nombre de la Herramienta</label>
        <input type="hidden" class="form-control" name="Id_cat" value="<?php echo $id_cat; ?>">
        <input type="text" class="form-control" name="NombreHerramienta" id="NombreHerramienta" value="<?php echo $nombre_cat ?>">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">No de Serie</label>
        <input type="text" class="form-control" name="Serie" id="Serie" value="<?php echo $serie_cat ?>">
      </div>

      <div class="mb-3">
        <label for="">Estado</label>
        <select class="form-control mb-3" name="Estado">
          <option value="<?php echo $estado_cat ?>" selected> <?php echo $estado_cat ?></option>
          <?php
          $id_cat = $_GET["Id_cat"];
          require __DIR__ . '/../../database/conexion.php';
          $sql = $enlace->query("SELECT * FROM estado");
          while ($resultado = $sql->fetch_assoc()) {
            echo "<option value='" . $resultado['Nombre'] . "'>" . $resultado['Nombre'] . "</option>";
          }
          ?>
        </select>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Marca</label>
          <input type="text" class="form-control" name="Marca" id="Marca" value="<?php echo $marca_cat ?>">
        </div>

        <label for="">Ubicacion</label>
        <select class="form-control mb-3" name="NuevaUbicacion">
          <option value="<?php echo $ubicacion_cat ?>" selected><?php echo $ubicacion_cat ?></option>
          <?php
          require __DIR__ . '/../../database/conexion.php';
          $sql = $enlace->query("SELECT * FROM ubicacion");
          while ($resultado = $sql->fetch_assoc()) {
            echo "<option value='" . $resultado['ID'] . "'>" . $resultado['Nombre'] . "</option>";
          }
          ?>
        </select>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Fecha del Primer Mantenimiento</label>
          <input type="date" class="form-control" name="fecha_1er" id="fecha_1er" value="<?php echo $fecha_1er_cat ?>">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Fecha del Segundo Mantenimiento</label>
          <input type="date" class="form-control" name="fecha_2do" id="fecha_2do" value="<?php echo $fecha_2do_cat ?>">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Fecha de Egreso del Taller</label>
          <input type="date" class="form-control" name="fecha_egreso" id="fecha_egreso" value="<?php echo $fecha_egreso_cat ?>">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Fecha de Ingreso al Taller</label>
          <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso" value="<?php echo $fecha_ingreso_cat ?>">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Remitente (Nombre a quien se le entrega)</label>
          <input type="text" class="form-control" name="remitente" id="remitente" value="<?php echo $remitente_cat ?>">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Fecha de Compra</label>
          <input type="date" class="form-control" name="fecha_compra" id="fecha_compra" value="<?php echo $fecha_compra_cat ?>">
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