<?php 


include 'conexion.php';
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$ins= $con -> query("INSERT INTO alumnos(id,nombre,paterno,materno) VALUES('','$nombre','$paterno','$materno')");


if ($ins) {
	# code...
	echo "guardado";
}else{


	echo "ERROR";
}


 ?>