


<?php include("conexion.php"); 

function Conectarse()  {     
	if (!($link=mysqli_connect("localhost","root","")))     
		{        echo "Error conectando a la base de datos.";        
	exit();     }     
	if (!mysqli_select_db($link,"proyecto de facturizacion"))  {   
	     echo "Error seleccionando la base de datos.";       
	      exit();     }     
	      return $link;  }  
 
$link=Conectarse(); 
echo "Conexión con la base de datos conseguida.<br>";  
 
mysql_close($link); //cierra la conexion  ?>