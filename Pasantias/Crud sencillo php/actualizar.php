<?php 

include 'conexion.php';
$id = $_REQUEST['id'];


$sel = $con -> query("SELECT * FROM alumnos WHERE id='$id'");
if ($fila = $sel -> fetch_assoc()) {
	# code...
}

 ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Ejemplo formulario BD</title>
</head>
<body>

	<form action="update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id ?>">
	
		<input type="text" name="nombre" placeholder="Nombre del Alumno" value="<?php echo $fila['nombre'] ?>"><br>
		<input type="text" name="paterno" placeholder="Primer apellido" value="<?php echo $fila['paterno'] ?>"><br>
		<input type="text" name="materno" value="<?php echo $fila['materno'] ?>" placeholder="Segundo apellido"><br>
		<input type="submit" value="Actualizar">
	</form>
	
</body>
</html>