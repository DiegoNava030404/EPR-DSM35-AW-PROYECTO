<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<div class="card-body">
  <form action="./../../app/Controllers/cruds-tienda/agregar-tienda.php" method="POST">
    <!--<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Tienda</label>
    <input type="number" class="form-control" id="ID_Tienda">
  </div>-->
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="Nombre" id="Nombre">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Telefono</label>
      <input type="text" class="form-control" name="Telefono" id="Telefono">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Correo</label>
      <input type="email" class="form-control" name="Correo" id="Correo">
    </div>
    <div class="mb-3">
    <label for="">Estado</label>
    <select class="form-control mb-3" name="Estado">
      <option>Elige a que Estado pertenece</option>
      <?php
      require __DIR__ . '/../../database/conexion.php';
      $sql = $enlace->query("SELECT * FROM Estado");
      while ($resultado = $sql->fetch_assoc()) {
        echo "<option value='" . $resultado['ID_Estado'] . "'>" . $resultado['Nombre'] . "</option>";
      }

      ?>
    </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
<?php
include __DIR__ . '/../../layout/footer.php';
?>