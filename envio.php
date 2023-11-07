<?php

// Configuración de la base de datos
$servidor   = "localhost";
$usuario    = "root";
$clave      = "";
$basededatos = "pizzaranch";

// Connectamos a la base de datos
$conexion = mysqli_connect( $servidor, $usuario, $clave, $basededatos );

// Verificamos la conexión
if( !$conexion ) {
    die( "Error al conectar a la base de datos: " . mysqli_connect_error() );
}

// Toma los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$comentarios = $_POST['comentarios'];

// Inserción en la base de datos
$query = "INSERT INTO comentarios (nombre, correo, comentarios) VALUES ('$nombre', '$correo', '$comentarios')";

// Executamos la query
if( !mysqli_query( $conexion, $query ) ) {
    die( "Error al insertar los datos en la base de datos: " . mysqli_error( $conexion) );
}

// Cerramos la conexión
mysqli_close( $conexion );

// Redirigimos a la página de inicio
header( "Location: /formulario.html" );

?>
