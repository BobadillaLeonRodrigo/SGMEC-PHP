<?php
include("../layout/Header.php");
include("../layout/Navbar.php");
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
        <link href="../css/styles.css" rel="stylesheet" />
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
                                    <div class="card-header"><h6 class="text-center font-weight-light">Registrar Usuarios</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="register-user.php" method="POST">
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="nombreu" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="appu" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Apellido Paterno</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="apmu" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Apellido Materno</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="emailu" type="email" placeholder="Ejem: lerma@conalemex.edu.mx" />
                                                        <label for="inputPassword">Correo Electronico</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-md-0">
                                                        <select class="form-control" type="text" name="id_departamento">
                                                            <option selected>Departamento</option>
                                                            <option value="1">Laboratorista</option>
                                                            <option value="2">Encargado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <input  class="btn btn-success text-dark" type="submit" name="registrarme" size="10" value="Registrarme">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabla de Usuarios
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido P</th>
                                            <th>Apellido M</th>
                                            <th>Correo</th>
                                            <th>Departamento</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido P</th>
                                            <th>Apellido M</th>
                                            <th>Correo</th>
                                            <th>Departamento</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                            <?php
                                                //Renderea lo datos de la tabla
                                                while($row=mysqli_fetch_array($query)){
                                                    echo "<tr>";
                                                    //Visualiza los datos que se estan llamando
                                                        //var_dump($row);
                                            ?>
                                                <th><?php echo $row['nombreu']?></th>
                                                <th><?php echo $row['appu']?></th>
                                                <th><?php echo $row['apmu']?></th>
                                                <th><?php echo $row['emailu']?></th>
                                                <th><?php echo $row['id_departamento']?> </th>
                                            <th>
                                                <div class="col">
                                                    <div class="row">
                                                        <div>
                                                            <a href="#" class="btn btn-success">Editar</a>
                                                            <a href="#" class="btn btn-danger">Eliminar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                            <?php
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="/assets/layout/layout.js"></script>
    </body>
</html>
