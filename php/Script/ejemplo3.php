<!-- Manual de PHP -->
<html>
<head>
 <title>Ejemplo de PHP</title>
</head>
<body>
<?php
 include("conexion.php");
 $link=Conexion();
 $result=mysqli_query($link,"select *from cliente");
?>
 <TABLE BORDER=3 CELLSPACING=1 CELLPADDING=1>
 <TR>
 	<TD>Id_clientes</TD>
     <TD>Nombre</TD>
<TD>Apellidos</TD>
<TD>Direccion</TD>
<TD>Correo</TD>
<TD>Telefono</TD>
<TD>Cedula</TD>
<td>Borrar</td>
<TD>Editar</td>
</TR>
<?php
 while($row = mysqli_fetch_array($result)) {
     ?>
    <tr>

    	<td><?php echo $row["Id_clientes"]; ?></td>
    <td><?php echo $row["Nombre"]; ?></td>
    <td><?php echo $row["Apellido"]; ?></td>
    <td><?php echo $row["Direccion"]; ?></td>
    <td><?php echo $row["Correo"]; ?></td>
    <td><?php echo $row["Telefono"]; ?></td>
    <td><?php echo $row["Cedula"]; ?></td>
    <td><a href="eliminar.php?id=<?php echo $row['ID_alumno'];?>">Borrar</a></td>
    <td><a href="actualizar3.php?editar=<?php echo $row['ID_alumno'];?>">editar</td>
       </tr>            
       <?php
 }
 mysqli_free_result($result);
 mysqli_close($link);
?>

<a href="csd.php">Agregar</a>
</table>
</body>
</html>