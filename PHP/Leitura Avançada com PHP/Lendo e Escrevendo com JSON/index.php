<?php
	
	// $json = '{"a":"Diogo", "b":{"0":"Alberto", "1":"Ribeiro"}, "c":3, "d":4, "e":5}';

	// $obj = json_decode($json);
	// $arr = json_decode($json, true);

	// echo "<pre>";
	// print_r($obj);
	// echo "</pre>";

	// echo $obj->a;
	// echo $arr['a'];

	// echo $arr['b'][0]

	# Transformar um array para JSON:

	// $arr = ['nome' => 'Diogo', 'cidade' => 'Tapejara'];

	// $json = json_encode($arr);

	// echo $json;	
?>

<!DOCTYPE html>
<html>0
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$.ajax({
				url: 'request.php',
				dataType: 'json'
			}).done(function(data){
				console.log(data.nome);
			})
		})
	</script>
</body>
</html>