<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">SWMA Admin</h1>
        <a href="http://localhost/EPR-DSM35-AW-PROYECTO/views/tienda/add.php"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Agregar Tienda</a>
    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabla Tienda</h1>
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
                                <th>ID Tienda</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>ID Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID Tienda</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>ID Estado</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <?php
                                //conexion
                                include('./../../database/conexion.php');
                                $sql = $enlace->query("select * from Tienda");
                                while ($row = $sql->fetch_assoc()) {
                                    $id_tienda_cat = $row['ID_Tienda'];
                                    $nombre_cat = $row['Nombre'];
                                    $telefono_cat = $row['Telefono'];
                                    $correo_cat = $row['Correo'];
                                    $id_estado_cat = $row['ID_Estado'];
                                    ?>
                                    <td>
                                        <?php echo $id_tienda_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $nombre_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $telefono_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $correo_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $id_estado_cat; ?>
                                    </td>
                                    <td>
                                        <div class="my-2"></div>
                                        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/views/tienda/show.php?id_cat=<?php echo $id_tienda_cat ?>"
                                            class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Visualizar Registros</span>
                                        </a>
                                        <div class="my-2"></div>
                                        <a href="#" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Modificar Registros</span>
                                        </a>
                                        <div class="my-2"></div>
                                        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/app/Controllers/cruds-tienda/delete-tienda.php?id_cat=<?php echo $id_tienda_cat ?>"
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