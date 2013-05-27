<?php

//conexion a la Base de datos (Servidor,usuario,password)
$link = mysql_connect("localhost", "root",""); 

//(nombre de la base de datos, $enlace) 
mysql_select_db("relocadb",$link);

//capturando datos
$v2 = $_REQUEST['codigo'];

//conuslta SQL
$result = mysql_query("select * from producto where cod_produc like '".$v2."'");

//cuantos reultados hay en la buesqueda
$num_resultados = mysql_num_rows($result);



//mostrando informacion de los perros y detalle 
for ($i=0; $i <$num_resultados; $i++) 
{   $row = mysql_fetch_array($result);
     echo ($i+1);
     echo " codigo :		".$row["cod_produc"];
     echo " </br>Nombre : 	".$row["nom_produc"];
     echo " </br> Precio :	".$row["precio"];
     echo " </br>tipo :	".$row["clase_pro"];
     echo " </br>Nacio en :	".$row["fe_ven"];
	 echo " </br>Foto:   ".$row["foto"];
     echo "</p>";
 }
?>
