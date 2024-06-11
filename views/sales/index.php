<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">SWMA Admin</h1>
        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/views/sales/add.php"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Agregar Consumibles</a>
    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabla de Consumibles</h1>
        <p class="mb-4"></p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Visualizacion de Tabla</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Tipo de Material</th>
                                <th>Cantidad</th>
                                <th>Fecha de Entrada al Almacen</th>
                                <th>Fecha de Salida del Almacen</th>
                                <th>Proveedor</th>
                                <th>Descripción</th>
                                <th></th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <tr>
                                <?php
                                //conexion
                                include('./../../database/conexion.php');
                                $sql = $enlace->query("select * from consumibles");
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
                                    <td>
                                        <?php echo $id_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $nombre_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $tipo_material_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $cantidad_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $fecha_entrada_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $fecha_salida_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $proveedor_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $descripcion_cat; ?>
                                    </td>

                                    <td>
                                        <div class="my-2"></div>
                                        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/views/sales/show.php?id_cat=<?php echo $id_cat ?>"
                                            class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Visualizar Registros</span>
                                        </a>

                                        <div class="my-2"></div>
                                        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/views/sales/edit.php?id_cat=<?php echo $id_cat ?>"
                                         class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Modificar Registros</span>
                                        </a>
                                        
                                        <div class="my-2"></div>
                                        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/cruds-sales/delete-sales.php?id_cat=<?php echo $id_cat ?>"
                                            class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Eliminar Registros</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <?php
    include __DIR__ . '/../../layout/footer.php';
    ?>