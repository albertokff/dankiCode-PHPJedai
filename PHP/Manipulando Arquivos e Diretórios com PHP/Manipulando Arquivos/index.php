<?php
	// if(file_exists('file.txt')) {
	// 	echo "O arquivo existe!";
	// } else {
	// 	$content = "meu novo conteudo criado através do PHP\r\noutra linha \r\noutra linha";

	// 	file_put_contents('file.txt', $content);
	// }


	/*
		Código acima verifica se o arquivo file.txt existe no diretório deste index.php. Se não existir, ele cria e adiciona o conteúdo de $content.

		Para quebrar a linha podemos utilizar o \r\n.
	*/
	
		// $content = file_get_contents('file.txt'); //Pode ser feito com sites também!!

		// echo nl2br($content);

	/*
		O código acima mostra o conteúdo do arquivo file.txt. nl2br serve para aplicar corretamente as quebras de linhas!
	*/

	// for($i = 0; $i < 100; $i++){
	// 	$conteudo = 'Meu conteúdo do arquivo'.$i;
	// 	file_put_contents('file'.$i.'.txt', $conteudo);
	// }

	/*
		O código acima cria 100 arquivos com conteúdo dentro.
	*/

		// for($i = 0; $i < 100; $i++) {
		// 	unlink('file'.$i.'.txt');
		// }

	/*
		Código acima apaga os 100 arquivos dentro da pasta.	
	*/


?>