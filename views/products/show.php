<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">SWMA Admin</h1>
        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/views/products/add.php"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Agregar Herramientas</a>
    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabla Herraamientas</h1>
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
                                <th>Nombre Herramienta</th>
                                <th>No de Serie</th>
                                <th>Estado</th>
                                <th>Marca</th>
                                <th>Ubicacion</th>
                                <th>Fecha 1er Mantenimiento</th>
                                <th>Fecha 2do Mantenimiento</th>
                                <th>Fecha de Egreso</th>
                                <th>Fecha de Ingreso</th>
                                <th>Remitente</th>
                                <th>Fecha de Compra</th>
                                <th></th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre Herramienta</th>
                                <th>No de Serie</th>
                                <th>Estado</th>
                                <th>Marca</th>
                                <th>Ubicacion</th>
                                <th>Fecha 1er Mantenimiento</th>
                                <th>Fecha 2do Mantenimiento</th>
                                <th>Fecha de Egreso</th>
                                <th>Fecha de Ingreso</th>
                                <th>Remitente</th>
                                <th>Fecha de Compra</th>
                                <th></th>
                            </tr>
                        </tfoot> -->
                        <tbody>
                            <tr>
                                <?php
                                //conexion
                                include('./../../app/Controllers/cruds-products/show-products.php');
                                $sql = $enlace->query("select * from herramientas");
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
                                    <td>
                                        <?php echo $id_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $nombre_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $serie_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $estado_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $marca_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $ubicacion_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $fecha_1er_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $fecha_2do_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $fecha_egreso_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $fecha_ingreso_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $remitente_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $fecha_compra_cat; ?>
                                    </td>
                                    <td>
                                        <!-- <div class="my-2"></div>
                                        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/views/products/show.php?id_cat=<?php echo $id_cat ?>"
                                            class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Visualizar Registros</span>
                                        </a> -->
                                        <div class="my-2"></div>
                                        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/views/products/edit.php?id_cat=<?php echo $id_cat ?>" 
                                        class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Modificar Registros</span>
                                        </a>
                                        <div class="my-2"></div>
                                        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/app/Controllers/cruds-products/delete-products.php?id_cat=<?php echo $id_cat ?>"
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