<?php
include('conecion.php');
$conecion=conectarse();
$consulta=mysqli_query($conecion,"select * from usuario");
?>
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<table class="table table-striped">
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