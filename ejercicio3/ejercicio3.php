<!-- El servidor lo levante con el comando php -S localhost:3000 ya que me encuentro actualmente 
trabajando el Ubuntu.

La ruta de este ejercicio es: http://localhost:3000/ejercicio3/ejercicio3.php -->
<?php
include '../includes/header.php';
/* Con echo y las comillas damos el titulo para 
informar el programa que vamos a realizar  */
echo "Escriba un script PHP de nombre ejercicio3.php que muestre por
pantalla el contenido de un archivo de texto de nombre fichero.txt el
cual tiene las siguientes líneas de texto:
<br/>
<br/>
El Quijote es la obra más conocida de Miguel de Cervantes Saavedra.
Publicada su primera parte con el título de El ingenioso hidalgo don
Quijote de la Mancha a comienzos de 1605, es una de las obras más
destacadas de la literatura española y la literatura universal, y una de las
más traducidas. En 1615 aparecería la segunda parte del Quijote de
Cervantes con el título de El ingenioso caballero don Quijote de la
Mancha.  ";
//Saltos de linea
echo '<br/>';
echo '<br/>';

/* echo y <br> nos permiten dar un salto de linea */
echo "------------------------------------------------------------------------------";
echo '<br>';
echo "Este es el Contenido que hay en el Fichero.txt";
echo '<br>';
echo "------------------------------------------------------------------------------";
echo '<br>';
echo '<br>';



$file = fopen("fichero.txt", "r");

while(!feof($file)) {

echo fgets($file). "<br />";

}

fclose($file);

?>