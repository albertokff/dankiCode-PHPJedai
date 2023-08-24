<?php

	function myAutoLoad($class){
		$class = str_replace('\\', '/', $class);
		if(file_exists('classes/'.$class.'.php')){
			include('classes/'.$class.'.php');
		}
	}

	spl_autoload_register('myAutoLoad');

	/*
		O autoload serve para carregar automaticamente as classes. No exemplo acima, a função está verificando se no diretório classes/ existe o nome da classe.php | Por isso, é importante colocar o nome da classe igual do arquivo para não precisar fazer muita modificação na hora de criar o autoLoad. 

		Detalhe: classes que não estejam dentro da pasta, podem ser navegadas na hora de instanciar, exemplo: a classe Inicial está dentro de uma outra pasta em classes, para chegar nela basta adicionar o diretório Home antes do nome da classe ao instanciar. 
	*/

?>