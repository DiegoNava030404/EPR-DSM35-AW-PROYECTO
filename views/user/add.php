<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Usuario</label>
    <input type="number" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Direccion Correo</label>
    <input type="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Estado</label>
    <input type="number" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Tipo_Usuario</label>
    <input type="number" class="form-control" id="exampleInputEmail1">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
include __DIR__ . '/../../layout/footer.php';
?>