<? 
$connection = mysql_connect("127.0.0.1:3306", "root", "Solaris2012") or die
("<p>Error</p>");     							//Conecta con la base de datos.
$database = "laboratorio2"; 
mysql_select_db($database, $connection) or die
("<p>Error.</p>");							//utiliza la base de datos laboratorio2

$query = mysql_query("SELECT * FROM diccionario ");			//Utiliza la tabla diccionario.
$encontrado = false; 
$inserp = $_POST["palabra"];
$inserSignificado = $_POST["significado"];
$id_palabra = 1;


while (($row = mysql_fetch_assoc($query))and($encontrado == false))
{ 
	if($row['palabra'] == $inserp)
	{
	   $encontrado = true;
	}
	else{$id_palabra = $id_palabra +1;}
}

if($encontrado == false){
  $insertar = mysql_query("INSERT INTO diccionario (id_palabra ,palabra, significado) VALUES ('{$id_palabra}','{$inserp}', '{$inserSignificado}')", $connection);
	if (!$insertar) {
	die("Fallo en la insercion de registro en la Base de Datos: " . mysql_error());
  	mysql_close($connection);}
	else{
  	   echo "Nueva palabra registrada en el diccionario";
	   mysql_close($connection);
	}
}
else
{
  echo "Ya la palabra se encuentra registrada";
  mysql_close($coneccion);
}
 ?>
