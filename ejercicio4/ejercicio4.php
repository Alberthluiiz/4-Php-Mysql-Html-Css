<!-- El servidor lo levante con el comando php -S localhost:3000 ya que me encuentro actualmente 
trabajando el Ubuntu.

La ruta de este ejercicio es: http://localhost:3000/ejercicio4/ejercicio4.php -->

<?php
include_once('db.php');
// Recibimos la informacion del Registro
// Recibimos todos los datos dle Formulario
// y los guardamos en las variables que creamos

$nombres = $_POST['nombres'];
$correos = $_POST['correos'];

echo "Los datos Ingresados son los siguientes: <br>";
echo "$nombres, $correos";

/* Consulta SQL Datos Basicos  */

    $conectar = Conndb(); // Ejecuta las conexiones a la DB.
    $sql = "INSERT INTO usuarios (nombres, correos) 
    VALUES ('$nombres', '$correos')";

    $resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar), E_USER_ERROR);
    echo "$sql";
?>
