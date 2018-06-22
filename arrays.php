<?php
$array = array('mac', 'linux', 'windows');
$retorno = in_array('mac', $array);
if($retorno){
	echo 'verdadeiro';
}
else {
	echo 'falso';
}
$array = array(11=>'mac',12=> 'linux',13=> 'windows');
$chaves = array_keys($array);
foreach($chaves as $i){
	print($i);
}

?>
