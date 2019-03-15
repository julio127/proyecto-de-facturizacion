<!-- Manual de PHP -->
<html>
<head>
 <title>Ejemplo de PHP</title>
</head>
<body>
<H1>Ejemplo de uso de bases de datos con PHP y MySQL</H1>
<FORM ACTION="procesar.php" method=POST>
<TABLE>
<TR>
 <TD>ID:</TD>
 <TD><INPUT TYPE="number" NAME="ID_alumno" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
 <TD>Nombre:</TD>
 <TD><INPUT TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
 <TD>Apellidos:</TD>
 <TD><INPUT TYPE="text" NAME="apellidos" SIZE="20" MAXLENGTH="30"></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Grabar">
</FORM>
<hr>
<?php
 include("conexion.php");
 $link=Conectarse();
 $result=mysqli_query($link,"select *from alumno");
?>
 <TABLE BORDER=3 CELLSPACING=1 CELLPADDING=1>
 <TR>
 <TD>ID_alumno</TD>
     <TD>Nombre</TD>
<TD>Apellidos</TD>
</TR>
<?php
 while($row = mysqli_fetch_array($result)) {
     ?>
    <tr>
    <td><?php echo $row["ID_alumno"]; ?></td>
    <td><?php echo $row["Nombre"]; ?></td>
    <td><?php echo $row["Apellido"]; ?></td>
       </tr>
       <?php
 }
 mysqli_free_result($result);
 mysqli_close($link);
?>
<a href="ejemplo3.php">Eliminar o editar</a>

</table>
</body>
</html>