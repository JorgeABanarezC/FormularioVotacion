<?php
// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$alias = $_POST['alias'];
$rut = $_POST['rut'];
$email = $_POST['email'];
$region = $_POST['region'];
$comuna = $_POST['comuna'];
$candidato = $_POST['candidato'];
$referencia = $_POST['referencia'];

// Validar los datos recibidos si es necesario

// Conexión a la base de datos
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'basedatos');

// Verificar si hubo un error en la conexión
if ($conexion->connect_errno) {
    die('Error en la conexión a la base de datos: ' . $conexion->connect_error);
}

// Insertar los datos en la tabla de votantes
$sql = "INSERT INTO votantes (nombre, alias, rut, email, region, comuna, candidato, referencia) VALUES ('$nombre', '$alias', '$rut', '$email', '$region', '$comuna', '$candidato', '$referencia')";

if ($conexion->query($sql) === TRUE) {
    echo 'Tu voto ha sido registrado correctamente. ¡Gracias por participar!';
} else {
    echo 'Error al guardar los datos: ' . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
