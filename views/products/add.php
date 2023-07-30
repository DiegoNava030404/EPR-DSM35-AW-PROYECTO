<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Producto</label>
    <input type="number" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre Producto</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Precio</label>
    <input type="decimal" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Categoria</label>
    <input type="number" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Tienda</label>
    <input type="number" class="form-control" id="exampleInputEmail1">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
include __DIR__ . '/../../layout/footer.php';
?>