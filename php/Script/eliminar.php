<?php
 include("conexion.php");
 $link=Conectarse();
$id=$_GET["id"];
 mysqli_query($link,"delete from clientes where ID_clientes=$id");
 header("Location: ejemplo3.php");
?>