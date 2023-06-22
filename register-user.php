<?php
include("db_con.php"); //conexion de base de datos
//registrarme es el name del boton del formulario
    if(isset($_POST['registrarme'])){
        if (strlen($_POST['nombreu']) >= 1 && strlen($_POST['appu']) >= 1 && strlen($_POST['apmu']) >= 1 &&
                strlen($_POST['emailu']) >= 1 &&
                    strlen($_POST['id_departamento']) >= 1 ){
                        $nombreu = trim ($_POST['nombreu']);
                        $appu = trim ($_POST['appu']);
                            $apmu = trim ($_POST['apmu']);
                                $emailu = trim ($_POST['emailu']);
                                    $id_departamento = trim ($_POST['id_departamento']);
                        $consulta = "INSERT INTO Usuarios (nombreu, appu, apmu, emailu,id_departamento)
                            VALUES ('$nombreu','$appu','$apmu','$emailu','$id_departamento')";
                                $resultado = mysqli_query($conex,$consulta);
                                    if($resultado){
                                        //header("Location:iniciarsesion.php");
                                        ?>
                                        <script>alert("Te has Registrado Correctamente")</script>
                                        <?php
                                            Header("Location: index.php");
                                        //include("funcionregistroValidado.php"); usando JavaScript
                                    } else {
                                        //header("Location: register.php");
                                        ?>
                                        <script>alert("El Usuario no se a Registrado Correctamente")</script>
                                        <?php
                                        Header("Location: index.php");
                                        //include("funcionregistroError.php"); usando JavaScript
                                    }
                    } else {
                        ?>
                            <script>alert("Ingresa todos los Campos Correspondientes")</script>
                        <?php
                        Header("Location: index.php");
                    //include("funcionregistrollenado.php"); usando JavaScript
                    }
                                }
//}
?>