<?php

$archivo = file("diccionario.txt");
/* file lee el archivo y guarda el contenido en un arreglo, donde cada elemento del arreglo corresponde a una línea del archivo */

if (!$archivo) /* si no se puede abrir el archivo */
{
     echo "<p>No se pudo abrir el archivo.</p>";
}

$filas=count($archivo);
$contadorFila = 0;
$inserp = "granja";
/* la funcion count cuenta el número de elementos de un arreglo y lo guarda en la variable $filas. Esta varible nos servirá como variable de control para recorrer el arreglo $archivo */


while($contadorFila < $filas)
{	
     $campo=explode(":",$archivo[$contadorFila]);		
     /* la funcion explode divide una cadena en base a un caracter elegido, en este caso : y lo guarda en el arreglo $campo 
	luego se va obteniendo cada campo equivalente a los elementos del arreglo */
     $palabra = $campo[0];
     $definicion = $campo[1];
     if($inserp == $palabra){
     	$contadorFila = $filas;
     /* finalmente se imprimen por pantalla los datos */
    echo "\n<p>$palabra:<font color='B500C2'>$definicion</font><br><font color='FF0000'>";

	}

     else{
	 $contadorFila = $contadorFila +1;
	}	
  
}

?>
