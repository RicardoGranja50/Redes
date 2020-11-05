<?php
	function parOuImpar($r,$rap){

		$total=$r+$rap;
		$pr=($r/$total)*100;
		$prap=($rap/$total)*100;
		echo $pr;
		echo '<br>';
		echo $prap;
	}
	parOuImpar($r=13,$rap=10);
?>