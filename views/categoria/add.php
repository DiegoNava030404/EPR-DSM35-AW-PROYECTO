<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<div class="card-body">
  <form action="./../../app/Controllers/cruds-categoria/agregar-categoria.php" method="POST">
   
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nueva Ubicacion</label>
      <input type="text" class="form-control" name="NuevaUbicacion" id="NuevaUbicacion">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
<?php
include __DIR__ . '/../../layout/footer.php';
?>