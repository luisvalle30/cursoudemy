<?php

//$frutas=array('peras', 'manzanas', 'fresas', 'uvas');



/*
if ($frutas[1]=='fresas') {
	# code...
	echo "exito";
}else{

	echo "No son fresas";
}
*/

$frutas2= array('clave1' => 'peras', 'clave 2'=>'manzanas');

$frutas=array('peras', 'manzanas', 
	'pn' => 'fresas', 'uvas');

echo $frutas['pn'];

?>