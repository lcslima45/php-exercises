<?php
	Class Pessoa{
		private $nome;	
		function __construct($nome){
			echo 'Construtor iniciado';
			$this->nome = $nome;
		}
		function getnome(){
			return $this->nome;		
		}
	}
$pessoa = new Pessoa("joão");

echo $pessoa->getnome();
?>
