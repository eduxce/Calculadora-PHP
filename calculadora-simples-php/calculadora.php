<?php

$a = $_POST['valor1'];
$b = $_POST['valor2'];
$op = $_POST['operador'];

if (!empty($op) ) {	
	if($op == '+')
	$c = $a + $b;
	elseif($op == '-')
	$c = $a - $b;
	elseif($op == '*')
	$c = $a * $b;
	elseif($op == '/')
	$c = $a / $b;

	echo "O resultado da operação é ", $c;
}
?>