<!DOCTYPE html>
<html>
<head>
  <title>Selección de opciones</title>
</head>
<body>
  <form>
    <select name="departamento">
      <?php
        // Conexión a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "sgmec");

        // Verificar la conexión
        if (mysqli_connect_errno()) {
          echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
        }

        // Consulta para obtener los datos de la tabla departamento
        $consulta = "SELECT id_departamento, tipo_departamento FROM Departamento";
        $resultado = mysqli_query($conexion, $consulta);

        // Verificar si se obtuvieron resultados
        if (mysqli_num_rows($resultado) > 0) {
          // Iterar sobre los resultados y crear las opciones del select
          while ($fila = mysqli_fetch_assoc($resultado)) {
            $id_departamento = $fila['id_departamento'];
            $tipo_departamento = $fila['tipo_departamento'];
            echo "<option value='$id_departamento'>$tipo_departamento</option>";
          }
        } else {
          echo "<option value=''>No se encontraron departamentos</option>";
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
      ?>
    </select>
  </form>
</body>
</html>
