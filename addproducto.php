<?php

//conexion a la Base de datos (Servidor,usuario,password)
$link = mysql_connect("localhost", "root",""); 

//(nombre de la base de datos, $enlace) 
mysql_select_db("Relocadb",$link);

//capturando datos
$v1 = $_REQUEST['cod'];
$v2 = $_REQUEST['nom'];
$v3 = $_REQUEST['pre'];
$v4 = $_REQUEST['tip'];
$v5 = $_REQUEST['fec'];
$v6 = $_REQUEST['fot'];

//conuslta SQL
$sql = "INSERT INTO producto(cod_produc, nom_produc, precio, clase_pro, fe_ven, foto) ";
$sql .= "VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6' )";
$result = mysql_query($sql);

//Mensaje de conformidad 
echo "<p>Ok, datos ingresados </p>"; 
echo $v1."<bd>".$v2."<bd>".$v3."<bd>".$v4."<bd>".$v5."<bd>".$v6
?>
