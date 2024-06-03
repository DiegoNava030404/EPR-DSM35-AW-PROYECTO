<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<div class="card-body">
<form action="./../../app/Controllers/cruds-products/agregar-productos.php" method="GET">
  <!--<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input type="number" class="form-control" id="ID">
  </div>-->
  <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nombre del Consumible</label>
      <input type="text" class="form-control" name="Nombre" id="Nombre">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tipo de Material</label>
      <input type="text" class="form-control" name="Material" id="Material">
    </div>
   
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Cantidad</label>
      <input type="number" class="form-control" name="Cantidad" id="Cantidad">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha de Entrada al Almacen</label>
      <input type="date" class="form-control" name="Fecha_Entrada" id="Fecha_Entrada">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha de Salida del Almacen</label>
      <input type="date" class="form-control" name="Fecha_Salida" id="Fecha_Salida">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Proveedor</label>
      <input type="text" class="form-control" name="Proveedor" id="Proveedor">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Descripcion</label>
      <input type="text" class="form-control" name="Descripcion" id="Descripcion">
    </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<?php
include __DIR__ . '/../../layout/footer.php';
?>