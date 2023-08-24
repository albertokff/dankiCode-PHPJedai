<?php
	include('exemplo.class.php');

	//Instância de objeto
	$exemplo = new Exemplo();
	$exemplo->var2 = 'Olá!';

	$exemplo2 = new Exemplo;
	$exemplo2->var2 = 'Bye!';
	
	// echo $exemplo->var2;
	// echo '<br />';	
	// echo $exemplo2->var2;

	// Essa chamada não vai funcionar porque estáticos chamamos de outra forma, mencionada abaixo
	// echo $exemplo->var3;

	Exemplo::$var3 = 'Outra variavel'; //atribuindo novo valor
	echo Exemplo::$var3;

	Exemplo::metodoEstatico();
?>