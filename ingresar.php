<!--
ingresar.html // se ingresa todos los datos del cliente y el producto
y se registran en dos tablas : "clientes" y "compras_realizadas"
-->

<?php
//conexion a la Base de datos (Servidor,usuario,password)
$link = mysql_connect("localhost", "root","");
mysql_select_db("relocadb",$link);//(nombre de la base de datos, $enlace)

//capturando datos

$v1 = $_REQUEST['cod'];
$v2 = $_REQUEST['nom'];
$v3 = $_REQUEST['dir'];
$v4 = $_REQUEST['tel'];
$v5 = $_REQUEST['em'];


//consulta SQL
$sql = "INSERT INTO cliente(cod_clie,nom_clie,email,direc,telefono)";
$sql .= "VALUES ('$v1','$v2','$v3','$v4','$v5')";

$result = mysql_query($sql);


//Mesnjase de conformidad 
echo "<p>Datos ingresados </p>";//mostrando informacion

?>

</body>