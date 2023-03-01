<?php
// Configuracion para Acceder a la Data Base
function Conndb()
{
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = " ";
    $dbname = "registrotv4d";

    // Generando la conexion con el servidor

    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
}
