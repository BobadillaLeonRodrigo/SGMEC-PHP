<?php
include("./layout/Header.php");
include("./layout/Navbar.php");
include("Connection.php");
    $con=conectar();
        $id_usuario=$_GET['id_usuario'];
            $sql="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
                $query=mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($query);
?>
<div class="row">
    <div class="col">
        <div class="card shadow-lg border-0">
            <div class="card-header"><h6 class="text-center font-weight-light">Registrar Usuarios</h6></div>
                <div class="card-body">
                    <form action="update-user.php" method="POST">
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
                            <input  class="btn btn-success text-dark" type="submit" name="registrarme" size="10" value="Actualizar">
                    </form>
                </div>
            </div>
        </div>
    </div>