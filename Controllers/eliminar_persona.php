<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM usuarios WHERE id_usuario=$id");
    if ($sql == 1) {
        echo '<div class="alert alert-success text-center">Usuario Eliminado Correctamente <i class="fa-solid fa-check fa-xl" style="color: green"></i></div>';
    } else {
        echo '<div class="alert alert-danger text-center">Error al Eliminar Usuario <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
    }
}
