<?php
//Agrengamos la condición al formulario si todos los campos estan completos.
if (!empty($_POST["btnregistro"])) {
    if (
        !empty($_POST["nombreu"]) and
        !empty($_POST["appu"]) and
        !empty($_POST["apmu"]) and
        !empty($_POST["emailu"]) and
        !empty($_POST["id_departamento"])
    ) {
        //Creamos variables para almacezar los datos del formulario.
        $nombreu = $_POST["nombreu"];
        $appu = $_POST["appu"];
        $apmu = $_POST["apmu"];
        $emailu = $_POST["emailu"];
        $id_departamento = $_POST["id_departamento"];
        //Se crea variable para la implementación de la conexión y la inserción de datos con una consulta.
        $sql = $conexion->query("insert into usuarios(nombreu,appu,apmu,emailu,id_departamento)
                    values ('$nombreu','$appu','$apmu','$emailu','$id_departamento')");
        if ($sql == 1) {
            echo '<div class="alert alert-success text-center">Usuario Registrado Correctamente <i class="fa-solid fa-check fa-xl" style="color: green"></i></div>';
        } else {
            echo '<div class="alert alert-danger text-center">Error al Registrar al Usuario <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
        }
    } else {
        echo '<div class="alert alert-warning text-center">Ingrese Todos los Campos Correspondientes <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
    }
}
