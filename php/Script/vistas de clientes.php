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
           <li class="hola" style="style-scope" > <a href="inventario.html">Almacen</a> </li>
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
                  <!--Estro es integrando jquery-->
                  <script src="Script/jquery.min.js.js"></script>
                <script src="Script/sistema.js"></script>
             <br>
             <br>
             <link rel="stylesheet" href="boo">
<?php
include('conexion.php');

$conexion=conectarse();
$consulta=mysqli_query($conexion,"select * from clientes");

?><link rel="stylesheet" href="css/bootsrap.min.css">
<form action="conex.php" method="post">
ID_cliente:<input type="text" name="id";>
<br>
<br>
Nombre:<input type="text"  name="nombre"; >
<br>
<br>
Apellido:<input type="text"  name="apellido"; >
<br>
<br>
Direccion:<input type="text"  name="direccion"; >
<br>
<br>
Correo:<input type="text"  name="correo"; >
<br>
<br>
Telefono:<input type="text"  name="telefono"; >
<br>
<br>
Cedula:<input type="text"  name="cedula"; >
<br>
<br>

<INPUT TYPE="submit" NAME="accion" VALUE="Grabar"> 
</form>
<table BORDER=1 CELLSPACING=1 CELLPADDING=1>
<tr>
<th>ID_cliente</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Direccion</th>
<th> Correo</th>
<th> Telefono</th>
<th> Cedula</th>
</tr>


<?php
while ($fila=mysqli_fetch_array($consulta)){
    
?>

 
<tr>
<td><?php echo $fila["ID_clientes"]?>  </td>
<td><?php echo $fila["Nombre"]?> </td>
<td><?php echo $fila["Apellido"]?> </td>
<td><?php echo $fila["Direccion"]?> </td>
<td><?php echo $fila["Correo"]?> </td>
<td><?php echo $fila["Telefono"]?> </td>
<td><?php echo $fila["Cedula"]?> </td>
<td><a href="eliminar.php?id=<?php echo $fila["ID_clientes"]?>"> Borra</a><a href="ver clientes.php?id=<?php echo $fila["ID_clientes"]?>&nombre=<?php echo $fila["Nombre"];?>&apellido=<?php echo $fila["Apellido"];?>&direccion=<?php echo $fila["Direccion"];?>&correo=<?php echo $fila["correo"];?>&telefono=<?php echo $fila["Telefono"];?>&cedula=<?php echo $fila["Cedula"];?>" > Editar</a></td>
</tr> 

<?php }?>
</table>

             </body>
              </html>






























































<link rel="stylesheet" href="boo">
<?php
include('conexion.php');
$conexion=conectarse();
$consulta=mysqli_query($conexion,"select * from alumno");

?><link rel="stylesheet" href="css/bootsrap.min.css">
<table BORDER=1 CELLSPACING=1 CELLPADDING=1>
<tr>
<th>ID_cliente</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Direccion</th>
<th> Correo</th>
<th> Telefono</th>
<th> Cedula</th>

</tr>


<?php
while ($fila=mysqli_fetch_array($consulta)) {
    

?>

 
<tr>
<td><?php echo $fila["ID_cliente"]?>  </td>
<td><?php echo $fila["Nombre"]?> </td>
<td><?php echo $fila["Apellido"]?> </td>
<td><?php echo $fila["Direccion"]?> </td>
<td><?php echo $fila["Correo"]?> </td>
<td><?php echo $fila["Telefono"]?> </td>
<td><?php echo $fila["Cedula"]?> </td>
<td><a href="eliminar.php?id=<?php echo $fila["ID_cliente"]?>"> Borra</a><a href="ver cliente.php?id=<?php echo $fila["ID_alumno"]?>&nombre=<?php echo $fila["Nombre"];?>&apellido=<?php echo $fila["Apellido"];?>&direccion=<?php echo $fila["Direccion"];?>&correo=<?php echo $fila["correo"];?>&telefono=<?php echo $fila["Telefono"];?>&cedula=<?php echo $fila["Cedula"];?>" > Editar</a></td>
</tr> 

<?php }?>
</table>
