<?php
	$a = array('a' => "maça",
		'b' => "banana"
	);
	$b = array('a' => "kiwi",
		'b' =>  "ananas",
		'c' =>  "morango"
	);

	echo array_merge(array $a[array $b]);
	echo "<br>";
	echo array_merge(array $b[array $a]);
?>