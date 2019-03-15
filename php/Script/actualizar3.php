<?php
 include("conexion.php");
 $link=Conectarse();
 $isd=$_GET["editar"];
$consulta=mysqli_query($link,"SELECT *FROM `alumno` WHERE `alumno`.`ID_alumno` = $isd");
 $fila=mysqli_fetch_array($consulta);
 $id_alumno=$fila["ID_alumno"];
 $nombre=$fila["Nombre"];
 $apellido=$fila["Apellido"];
 header("Location: una.php?id=$id_alumno&nomb=$nombre&apellid=$apellido");
?>