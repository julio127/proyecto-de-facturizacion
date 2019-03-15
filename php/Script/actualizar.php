<?php
 include("conexion.php");
 $link=Conectarse();
 $sid=$_GET["ca"];
 $cass=$_GET["ca"];
 $ssa=$_GET["nomb"]; 
 $ass=$_GET["apelli"];
 mysqli_query($link,"UPDATE `clientes` SET `ID_clientes` = '$Nombre', `Apellido` = '$Direccion', `correo` = '$Telefono'= '$Cedula' WHERE `clientes`.`ID_alumno` = $id");
 header("Location: .php");
?>