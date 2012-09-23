<html>
<body>
<?php
$archivo = file("Diccionario.txt");
/* file lee el archivo y guarda el contenido en un arreglo, donde cada elemento del arreglo corresponde a una línea del archivo */

if (!$archivo) /* si no se puede abrir el archivo */
{
     echo "<p>No se pudo abrir el archivo.</p>";
}

$filas=count($archivo);
$contadorFila = 0;
$inserp = $_POST["palabra"];
$encontrado = false;
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
	$encontrado = true;
     /* finalmente se imprimen por pantalla los datos */
    echo "\n<p>$palabra:<font color='B500C2'>$definicion</font><br><font color='FF0000'>";

	}

     else{
	 $contadorFila = $contadorFila +1;
	}
}

  if($encontrado == false){	
  $archivo = fclose();
  echo "la palabra no se encuentra en el diccionario";}
?>
</body>
</html>
