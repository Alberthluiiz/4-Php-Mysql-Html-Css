<!-- El servidor lo levante con el comando php -S localhost:3000 ya que me encuentro actualmente 
trabajando el Ubuntu.

La ruta de este ejercicio es: http://localhost:3000/ejercicio2/ejercicio2.php?counter=1
http://localhost:3000/ejercicio2/ejercicio2.php?counter=0-->

<?php
include '../includes/header.php';
/* Con echo y las comillas damos el titulo para 
informar el programa que vamos a realizar  */
echo "Escriba un script PHP de nombre ejercicio2.php que cree una sesión
que aumente su valor en uno si por el parámetro GET se le pasa un
parámetro counter con el valor 1 y que disminuya el número de la sesión
en 1 si el valor del parámetro counter es 0. ";
//Saltos de linea
echo '<br/>';
echo '<br/>';

echo "Los numero pares que existen del 1 al 10 son:\n";
/* echo y <br> nos permiten dar un salto de linea */
echo '<br>';
echo '<br>';


/* 
Ejercicio 1. Crear una sesión que aumente su valor en uno o dismuya en uno
 * en función de si el parametro get counter está a uno o a cero.
 */

session_start();

if (!isset($_SESSION["numero"])) {
    $_SESSION['numero'] = 0;
}

if (isset($_GET['counter']) && $_GET['counter'] == 1) {
    $_SESSION['numero']++;
}

if (isset($_GET['counter']) && $_GET['counter'] == 0) {
    $_SESSION['numero']--;
}

?>

<h1>El valor de la sesión numero es: <?= $_SESSION['numero'] ?></h1>
<br>
<a href="ejercicio2.php?counter=1">Aumentar el valor</a><br />
<br>
<a href="ejercicio2.php?counter=0">Disminuir el valor</a>