<?php
	$carros=array(
		'Punto'=>array(
			'cor'=>'azul',
			'potencia'=>'1.0',
			'opcionais'=>'Ar cond'
		),
		'Corsa'=> array(
			'cor'=>'cinza',
			'potencia'=>'1.3',
			'opcionais'=> 'MP3'
		),
		'Golf'=>array(
			'cor'=> 'branco',
			'potencia'=>'1.0',
			'opcionais'=>'Metalica'
		)
	); 

	echo $carros['punto']['opcionais'];

	foreach ($carros as $modelo => $carro) {
		echo '<h1>' .$modelo. '</h1>';
		foreach ($carro as $chave => $detalhes) {
			echo '<b>' .$chave. '</b> ='.$detalhes. '<br>';
		}
	}

	//este codigo cria 3 arrays dentro de 1 array e de seguida percorre os 3 e mostra o seu conteudo
?>