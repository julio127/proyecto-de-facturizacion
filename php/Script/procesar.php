<?php
  include("conexion.php");
 $link=Conectarse();
 $cas=$_POST["ID_alumno"]; 
 $sa=$_POST["nombre"]; 
 $as=$_POST["apellidos"];
 mysqli_query($link,"insert into alumno(ID_alumno,Nombre,Apellido)
  values('$cas','$sa','$as')");
 header("Location: csd.php");
?>