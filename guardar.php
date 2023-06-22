<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar'])) {
  // Obtener los datos del formulario
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];

  // Conectar a la base de datos (reemplaza los valores con los de tu configuración)
  $conexion = new mysqli("fdb1029.awardspace.net","4314518_redsocial","iamroot1","4314518_redsocial")or die(
    "error de conexion");

  // Verificar si la conexión fue exitosa
  if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
  }

  // Preparar la consulta SQL
  $sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$email')";

  // Ejecutar la consulta
  if ($conexion->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
  } else {
    echo "Error al guardar los datos: " . $conexion->error;
  }

  // Cerrar la conexión a la base de datos
  $conexion->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editar'])) {
  // Obtener los datos del formulario
  $cuenta = $_POST['cuenta'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $celular = $_POST['numCelular'];
  $email = $_POST['email'];
  $bio = $_POST['bio'];
  // Conectar a la base de datos (reemplaza los valores con los de tu configuración)
  $conexion = new mysqli("fdb1029.awardspace.net","4314518_redsocial","iamroot1","4314518_redsocial")or die(
    "error de conexion");

  // Verificar si la conexión fue exitosa
  if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
  }

  // Preparar la consulta SQL para editar
  $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', num_telefono='$celular', correo='$email', bio='$bio' WHERE num_cuenta='$cuenta'";

  // Ejecutar la consulta
  if ($conexion->query($sql) === TRUE) {
    echo "Los datos se han editado correctamente.";
  } else {
    echo "Error al editar los datos: " . $conexion->error;
  }

  // Cerrar la conexión a la base de datos
  $conexion->close();
}
?>
