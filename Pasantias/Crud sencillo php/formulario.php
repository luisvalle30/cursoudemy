<?php 
include 'conexion.php';
 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ejemplo formulario BD</title>
</head>
<body>

<form action="guardar.php" method="post">
	
	<input type="text" name="nombre" placeholder="Nombre del Alumno"><br>
	<input type="text" name="paterno" placeholder="Primer apellido"><br>
	<input type="text" name="materno" placeholder="Segundo apellido"><br>
	<input type="submit" value="Guardar">
</form>

<table>
	<th>id</th>
	<th>nombre</th>
	<th>apelido materno</th>
	<th>apellido paterno</th>
	<?php 
		$sel= $con -> query("SELECT * FROM alumnos");
		while ($fila = $sel -> fetch_assoc()) {
		?>
			<tr>
				<td><?php echo $fila['id'] ?></td>
				<td><?php echo $fila['nombre'] ?></td>
				<td><?php echo $fila['paterno'] ?></td>
				<td><?php echo $fila['materno'] ?></td>
				<td><a href="actualizar.php?id=<?php echo $fila['id']?>">Actualizar</a></td>
				<td><a href="borrar.php?id=<?php echo $fila['id']?>">Borrar</a></td>
			</tr>
			<?php  } ?>
		
	 
</table>
	
</body>
</html>