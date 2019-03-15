<!-- Manual de PHP -->
<html>
<head>
 <title>Ejemplo de PHP</title>
</head>
<body>
<H1>Ejemplo de uso de bases de datos con PHP y MySQL</H1>

<hr>
<?php
 include("conexion.php");

 $link=Conectarse();
 $result=mysqli_query($link,"select *from alumno");
 exit();
?>
 <TABLE BORDER=3 CELLSPACING=1 CELLPADDING=1>
 <TR>
 <TD>ID_alumno</TD>
     <TD>Nombre</TD>
<TD>Apellidos</TD>
<td>Editar</td>
</TR>
<?php
 while($row = mysqli_fetch_array($result)) {
     ?>
    <tr>
    <td><?php echo $row["ID_alumno"]; ?></td>
    <td><?php echo $row["Nombre"]; ?></td>
    <td><?php echo $row["Apellido"]; ?></td>
    <td><a href="actualizar3.php?editar=<?php echo $row['ID_alumno'];?>">editar</td>
       </tr>
       <?php
 }
 mysqli_free_result($result);
 mysqli_close($link);
?>
<a href="ejemplo3.php">Eliminar </a>
<a href="csd.php">Agregar</a>
</table>
</body>
</html>