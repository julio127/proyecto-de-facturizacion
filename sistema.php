<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="img/descarga.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Esto es integrando bootstrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <title>Admy EST</title>
         <!--Esto es integrando el css-->      
        <link rel="stylesheet" href="css/sis.css">
        </head>
       <body>                       
   <!--Esta es la cabesera de la pagina    -->
       <div class="conteiner" >
        <div class=" row"></div>
       <div id="col" class="col-sm-12" > <dir>  <h2> <a href="sistema.html" class="q" style="text-decoration:none; color: floralwhite"   > Admy ETS </h2> </i></a> </a> </dir> 
        </div>
  <!--Este es el menu orizontal-->
        <div class="contenedor-menu">
 
            <ul class="menu">
           <li  ><a href="#">  <i class=" icono izquierda glyphicon glyphicon-list-alt "></i>  Inventario <i class=" icono derecha   glyphicon glyphicon-chevron-down"></i></a>
           <ul>
           <li>Producto</li>
           <li class="hola" style="style-scope" > <a href="inventario.php">Almacen</a> </li>
           </ul>
           </li>
           <li><a href="#"> <i class=" icono izquierda  glyphicon glyphicon-user"></i> Cliente <i class=" icono derecha glyphicon glyphicon-chevron-down"></i></a>
            <ul>
             <li>Vista de clientes</li>
              </ul>
               </li>
               <li  ><a href="#"> <i class=" icono izquierda glyphicon glyphicon-duplicate"></i> Facturizacion <i class=" icono derecha glyphicon glyphicon-chevron-down"></i></a>
               <ul>
                <li>Factura</li>
                  <li>Conduce</li>
                  <li>Historial</li>
                   </ul>
                  </li>
                  </ul>
                    </div>
                    <div class="hola" style="border:solid 1px ; position: absolute; display: block; " > clientes</div>
                    <?php
include('conecion.php');
$conecion=conectarse();
$consulta=mysqli_query($conecion,"select * from usuario");
?>
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<table class="table table-striped" >
  <tr>
    <th scope="col">ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Cedula</th>
     <th>Privilegio</th>
  </tr>
   <?php

while ( $fila=mysqli_fetch_array($consulta)) {
    ?>

<tr>
  <td><?php echo $fila["ID_Usuario"]; ?></td>
  <td><?php echo $fila["Nombre"]; ?></td>
  <td><?php echo $fila["Apellido"]; ?></td>
  <td><?php echo $fila["Direccion"]; ?></td>
  <td><?php echo $fila["Telefono"]; ?></td>
  <td><?php echo $fila["Cedula"]; ?></td>
  <td><?php echo $fila["Privilegio"]; ?></td>
</tr>
<?php } ?>
</table>
<?php
cerrar();?>
                  <!--Estro es integrando jquery-->
                  <script src="Script/jquery.min.js.js"></script>
                <script src="Script/sistema.js"></script>
             </body>
              </html>