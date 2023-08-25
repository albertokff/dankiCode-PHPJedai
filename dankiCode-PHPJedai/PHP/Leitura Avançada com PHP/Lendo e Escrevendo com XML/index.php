<?php
	
	# Ler arquivo XML

	// $xml = simplexml_load_file('arquivo.xml');

	// echo "<pre>";	
	// print_r($xml);
	// echo "</pre>";

	// echo $xml->informacoes->item->title;

	# Criando XML a partir de um array

	$arr = ['Guilherme' => 'nome', '24' => 'idade']; // Criando um array em que o primeiro item vai dentro da chave
	$xml = new SimpleXMLElement('<root/>'); // defino qual o nome da primeira chave
	array_walk_recursive($arr, array ($xml, 'addChild'));
	file_put_contents('arquivo.xml', $xml->asXML());
?>