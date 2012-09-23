<?php 
$connection = mysql_connect("127.0.1.1:3306", "root","") or die ("<p>Error</p>");    //Conecta con la base de datos.
$database = "laboratorio2"; 
mysql_select_db($database, $connection) or die ("<p>Error.</p>");	//utiliza la base de datos laboratorio2
echo "estoy conectado";
mysql_close($connection);
?>
