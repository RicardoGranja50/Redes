<?php
	$clubes = array(
		'Benfica' => array(
			'nome_completo' => 'Sport Lisboa Benfica',
			'estadio' => 'Estadio da Luz',
			'localidade' => 'Lisboa',
			'pais'=> 'Portugal'
		),
		'Benfica' => array(
			'nome_completo' => 'Sporting Clube de Portugal',
			'estadio' => 'Estadio Jose de Alvalade',
			'localidade' => 'Lisboa',
			'pais'=> 'Portugal'
		)
	);

	foreach ($clubes as $key1 => $clube1) {
		echo $clube1. ">>>>>>>". $key1;
		foreach ($clubes2 as $key2 => $clube2) {
			echo $clube2. ">>>>>>>". $key2;
		}
	}
?>