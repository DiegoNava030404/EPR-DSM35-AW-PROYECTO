<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<div class="card-body">
  <form action="./../../app/Controllers/cruds-estado/agregar-estado.php" method="POST">

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Estado en el que se encuentra la Herramienta</label>
      <input type="text" class="form-control" name="Estado" id="Estado">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
<?php
include __DIR__ . '/../../layout/footer.php';
?>