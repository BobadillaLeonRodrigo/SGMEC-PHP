<?php
include("./layout/Header.php");
include("./layout/Navbar.php");
include "Models/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM usuarios WHERE id_usuario=$id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SGMEC</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 text-center">Panel Administrativo</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <main>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow-lg border-0">
                                    <div class="card-header">
                                        <h6 class="text-center font-weight-light">Modificar Usuarios</h6>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                                            <?php
                                            include "Controllers/modificar_usuario.php";
                                            while ($datos = $sql->fetch_object()) {
                                            ?>
                                                <div class="row mb-2">
                                                    <div class="col-md-4">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" name="nombreu" value="<?= $datos->nombreu ?>" type="text" placeholder="Enter your first name" />
                                                            <label for="inputFirstName">Nombre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" name="appu" value="<?= $datos->appu ?>" type="text" placeholder="Enter your last name" />
                                                            <label for="inputLastName">Apellido Paterno</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" name="apmu" value="<?= $datos->apmu ?>" type="text" placeholder="Enter your last name" />
                                                            <label for="inputLastName">Apellido Materno</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" name="emailu" value="<?= $datos->emailu ?>" type="email" placeholder="Ejem: lerma@conalemex.edu.mx" />
                                                            <label>Correo Electronico</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-md-0">
                                                            <select class="form-control" type="text" name="id_departamento" value="<?= $datos->id_departamento ?>"">
                                                                <option selected>Departamento</option>
                                                                <option value=" 1">Laboratorista</option>
                                                                <option value="2">Encargado</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                </div>
                                                <input class="btn btn-success text-dark" type="submit" name="btnmodificar" size="10" value="Modificar">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- La tabla no es responsiva -->
                <div class="container">
                    <table class="table border-dark">
                        <thead class="text-center text-dark bg-success">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Correo</th>
                                <th>Departamento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido P</th>
                                <th>Apellido M</th>
                                <th>Correo</th>
                                <th>Departamento</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody class="text-center">
                            <?php
                            include "Models/conexion.php";
                            $sql = $conexion->query("select * from usuarios");
                            while ($datos = $sql->fetch_object()) { ?>
                                <tr>
                                    <td><?= $datos->id_usuario ?></td>
                                    <td><?= $datos->nombreu ?></td>
                                    <td><?= $datos->appu ?></td>
                                    <td><?= $datos->apmu ?></td>
                                    <td><?= $datos->emailu ?></td>
                                    <td><?= $datos->id_departamento ?></td>
                                    <td>
                                        <a href="modificar_usuario.php?id=<?= $datos->id_usuario ?>" class="btn btn-small btn-success" style="color:black"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href="index.php?id=<?= $datos->id_usuario ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>