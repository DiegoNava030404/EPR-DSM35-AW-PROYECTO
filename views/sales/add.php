<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Ventas</label>
    <input type="number" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Total</label>
    <input type="decimal" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Tienda</label>
    <input type="number" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Usuario</label>
    <input type="number" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Detalle_Ventas</label>
    <input type="number" class="form-control" id="exampleInputEmail1">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
include __DIR__ . '/../../layout/footer.php';
?>