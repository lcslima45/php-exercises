<?php
	class Pessoa{
		var $nome;
		function setNome($nome){
			$this->nome = $nome;	
		}
		function getNome(){
			return $this->nome;		
		}	
	}
	class Felino{
		var $mamifero = 'sim';		
		function correr(){
			echo 'Correr como felino';	

				
		}	
	}
	class Chita extends Felino{
		function correr(){
			echo 'Correr como Chita';

					
		}
	}
$pessoa = new Pessoa();
$pessoa->setNome('Joao');
echo $pessoa->getNome();
echo "<br />";
$chita = new Chita();
echo $chita->mamifero;

echo "<br/>";

echo $chita->correr();

?>
