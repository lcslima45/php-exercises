<?php
	class Veiculo{
		/*
		public 
		private	
		protected		
		*/
		public	$placa;
		private $cor;
		protected $tipo;

		
	}
$veiculo = new Veiculo();
$veiculo->placa = 'hvh5797';
echo $veiculo->placa;
$veiculo->cor = 'azul';
$veiculo->tipo= 'gol';

?>
