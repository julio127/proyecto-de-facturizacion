
 <?php
   function Conectarse() 
 { 

     if (!($link=mysqli_connect("localhost","root","")))    
  {  
  	 echo "Error conectando a la base de datos.";     
  	    exit();
  	     } 
  	         if (!mysqli_select_db($link,"proyecto de facturizacion"))    
  	      {  
  	      	 echo "Error seleccionando la base de datos.";       
  	      	  exit();

  	      	   }   
  	      	     return $link; 
  	      	      } 
  	      	      function cerrar()
  	      	      {
  	      	      	mysqli_close(conectarse());
  	      	      }
  	      	      
 //cierra la conexion 

  ?>
 