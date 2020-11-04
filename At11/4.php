<?php
	$a = array("a" => "maça",
		"b" => "banana"
	);
	$b = array("a" => "kiwi",
		"b" =>  "ananas",
		"c" =>  "morango"
	);

	$ola1 = array_merge($a,$b);
	echo $ola1;
	echo "<br>";

	$ola2=array_merge($b,$a);
	echo $ola2;
?>