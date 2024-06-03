<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="https://localhost/EPR-DSM35-AW-PROYECTO/views/categoria/add.php"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Agregar Categoria</a>
    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabla de Ubicacion de la Herramienta</h1>
        <p class="mb-4">Aqui se mostrara la tabla de las categorias de los productos donde los administradores podran
            visualizar y modificar. </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <?php
                                //conexion
                                include('./../../app/Controllers/cruds-categoria/show-categoria.php');
                                while ($row = $resultado->fetch_array()) {
                                    $id_cat = $row['ID'];
                                    $nombre_cat = $row['Nombre'];
                                    ?>
                                    <td>
                                        <?php echo $id_cat; ?>
                                    </td>
                                    <td>
                                        <?php echo $nombre_cat; ?>
                                    </td>
                                    <td>
                                       <!-- <div class="my-2"></div>
                                        <a href="#" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Visualizar Registros</span>
                                        </a>-->
                                        <div class="my-2"></div>
                                        <a href="#" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Modificar Registros</span>
                                        </a>
                                        <div class="my-2"></div>
                                        <a href="#" class="btn btn-danger btn-icon-split">
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

    <?php
    include __DIR__ . '/../../layout/footer.php';
    ?>