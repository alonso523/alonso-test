<?php
$connection = mysql_connect("127.0.1.1:3306", "root","") or die ("<p>Error</p>");    //Conecta con la base de datos.
$database = "laboratorio2"; 
mysql_select_db($database, $connection) or die ("<p>Error.</p>");	//utiliza la base de datos laboratorio2
//echo "estoy conectado";
$query = mysql_query("SELECT * FROM diccionario ");			//Utiliza la tabla diccionario.
$encontrado = false; 
$inserp = $_POST["palabra"];

while ($row = mysql_fetch_assoc($query))
{ 
	if($row['palabra'] == $inserp)
	{
	   $encontrado = true;
	   echo "<p>".$row['palabra']. ":" . htmlspecialchars($row['significado'])."</p>";
	}
}

if($encontrado == false){
  echo "la palabra no se encuentra en el diccionario";
  mysql_close($connection);
}
 ?>
