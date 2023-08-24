<?php

	namespace Sessao1;
	use \Class2;

	class Class1{
		function __construct(){
			new Class2();			
			echo 'Classe Instanciada';
		}
	}

	/*
		Perceba que tem um namespace Sessao1 na primeira linha. Isso significa que as classes desse arquivo estão numa sessão Sessao1. Por outro lado, lá no arquivo do Class2.php não tem namespace. Logo, por ele estar na sessão geral, digamos assim, quando formos instanciar, precisamos dizer que aquela classe está na sessão geral, utilizando somente \ antes do nome.

		Uma alternativa e também maneira de deixar mais organizado o código é após definir o namespace do arquivo, adicionar o use sessão\Class2. Isso faz com que na hora de utilizar o Class2() não seja necessário utilizar o sessão\class2().

	*/

?>