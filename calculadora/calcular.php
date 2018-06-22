<?php
require_once 'classes/Calculadora.php';
$numero1 = $_POST['numero1'];

$numero2 = $_POST['numero2'];

$operacao = $_POST['operacao'];

$calculadora = new Calculadora();
$calculadora->setNumero1($numero1);

$calculadora->setNumero2($numero2);

if($operacao=='somar'){
	$calculadora->somar();
	$total = $calculadora->getTotal();
	echo $total;
}
if($operacao=='subtrair'){
	$calculadora->subtrair();
	$total = $calculadora->getTotal();
	echo $total;
}
if($operacao=='multiplicar'){
	$calculadora->multiplicar();
	$total = $calculadora->getTotal();
	echo $total;
}
if($operacao=='dividir'){
	$calculadora->dividir();
	$total = $calculadora->getTotal();
	echo $total;
}


?>
