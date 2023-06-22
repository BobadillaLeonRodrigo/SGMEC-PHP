<?php
include("Connection.php");
    $con=conectar();
        $id_U=$_GET['id'];
            $sql="DELETE FROM Usuarios WHERE id_usuario='$id_U'";
                $query=mysqli_query($con,$sql);
                    if($query){
                        Header("Location: dashboard.php");
                    }