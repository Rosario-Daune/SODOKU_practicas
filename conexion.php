<?php

// Configuracion necesaria para la base de datos
function conn(){

$servidor="localhost";
$usuariodb="root";
$passworddb= "";
$dbname="tuxydb";

// Generando la conexion con el servidor
$conectar = mysqli_connect($servidor, $usuariodb, $passworddb, $dbname) or die ("No se pudo conectar a la base de datos");

return $conectar;

}

?>