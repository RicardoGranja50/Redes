<?php
	$pessoas['nome']='Maria da Silva';
	$pessoas['rua']='Sao joao';
	$pessoas['bairro']='Bairro lindo da Cidade';
	$pessoas['cidade']='Uma cidade';

	foreach ($pessoas as $dados) {
		echo $dados;
		echo '<br>';
	}
?>