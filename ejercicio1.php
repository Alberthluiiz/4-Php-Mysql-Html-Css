<!-- El servidor lo levante con el comando php -S localhost:3000 ya que me encuentro actualmente 
trabajando el Ubuntu.

La ruta de este ejercicio es: http://localhost:3000/ejercicio1.php -->
<?php
include 'includes/header.php';
/* Con echo y las comillas damos el titulo para 
informar el programa que vamos a realizar  */
echo "Escriba un script PHP de nombre ejercicio1.php que imprima por
pantalla todos los números pares que existen del 1 al 100.";
//Saltos de linea
echo '<br/>';
echo '<br/>';

echo "Los numero pares que existen del 1 al 10 son:\n";
/* echo y <br> nos permiten dar un salto de linea */
echo '<br>';
echo '<br>';

for ($i=1; $i<=100; $i++)
{
    if($i%2 !=1) /* Si el numero dividiso para 2 es igual a 1 es par y se mostrara en pantalla  */
    {
        echo $i . "<br/>";
    }
}