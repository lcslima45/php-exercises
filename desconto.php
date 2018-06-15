<?php
require_once("funcoes_desconto.php");
$valor_total = 800;
$desconto = 10;
$valor_com_desconto= calcula_desconto($valor_total, $desconto);
?>
Valor total: <?php echo $valor_total?> <br/>
Valor do desconto: <?php echo $desconto?>% <br />
Valor com desconto: <?php echo $valor_com_desconto ?> <br/>
