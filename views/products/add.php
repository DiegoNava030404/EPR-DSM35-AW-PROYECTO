<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<div class="card-body">
  <form action="./../../app/Controllers/cruds-products/agregar-productos.php" method="POST">
    <!--<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input type="number" class="form-control" name ="ID" id="ID">
  </div>-->
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nombre de la Herramienta</label>
      <input type="text" class="form-control" name="NombreHerramienta" id="NombreHerramienta">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">No de Serie</label>
      <input type="text" class="form-control" name="Serie" id="Serie">
    </div>

    <div class="mb-3"> 
    <label for="">Estado</label>
    <select class="form-control mb-3" name="Estado">
      <option>Elige en que Estado se encuentra la Herramienta</option>
      <?php
      require __DIR__ . '/../../database/conexion.php';
      $sql = $enlace->query("SELECT * FROM estado");
      while ($resultado = $sql->fetch_assoc()) {
        echo "<option value='" . $resultado['Nombre'] . "'>" . $resultado['Nombre'] . "</option>";
      }
      ?>
    </select>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Marca</label>
      <input type="text" class="form-control" name="Marca" id="Marca">
    </div>

    <label for="">Ubicacion</label>
    <select class="form-control mb-3" name="NuevaUbicacion">
      <option>Elige donde se encuentra la Herramienta</option>
      <?php
      require __DIR__ . '/../../database/conexion.php';
      $sql = $enlace->query("SELECT * FROM ubicacion");
      while ($resultado = $sql->fetch_assoc()) {
        echo "<option value='" . $resultado['Nombre'] . "'>" . $resultado['Nombre'] . "</option>";
      }
      ?>
    </select>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha del Primer Mantenimiento</label>
      <input type="date" class="form-control" name="fecha_1er" id="fecha_1er">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha del Segundo Mantenimiento</label>
      <input type="date" class="form-control" name="fecha_2do" id="fecha_2do">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha de Egreso del Taller</label>
      <input type="date" class="form-control" name="fecha_egreso" id="fecha_egreso">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha de Ingreso al Taller</label>
      <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Remitente (Nombre a quien se le entrega)</label>
      <input type="text" class="form-control" name="remitente" id="remitente">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha de Compra</label>
      <input type="date" class="form-control" name="fecha_compra" id="fecha_compra">
    </div>

    </div>
    <div class="mb-3"> 
    </div>

    <div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

  </form>
</div>
<?php
include __DIR__ . '/../../layout/footer.php';
?>