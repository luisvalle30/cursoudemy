<?php 

$val1= $_POST['valor1'];
$val2= $_POST['valor2'];
$val3= $_POST['valor3'];
$val4= $_POST['valor4'];
$op= $_POST['operador'];
//echo $val1;
//echo $val2;


function calcular($v1, $v2){

		$ope = $_POST['operador'];
		switch ($ope) {
			case 0:
				# code...
				$res = $v1 + $v2;
				break;
			case 1:
				# code...
				$res = $v1 - $v2;
				break;
			case 2:
				# code...
				$res = $v1 * $v2;
				break;
			case 3:
				# code...
				$res = $v1 / $v2;
				break;
			
			
		}

		return $res;

}

$operacion = array('SUMA','RESTA', 'MULTIPLICACION','DIVISION' );



echo "<br>";
echo "El resultado de la primera"." ".$operacion[$op]." "." es ".calcular($val1, $val2);
echo "<br>";
echo "El resultado de la segunda"." ".$operacion[$op]." "."es".calcular($val3, $val4);

 
 ?>
