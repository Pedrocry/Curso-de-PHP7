<?php
// operadores aritiméticos
//$a=30;
// $b=55;

//echo $a%$b;
//var_dump($a>$b);

// VERIFICAR VARIAVEIS NÃO NULAS. (ignora os nulos ate chegar a um valor certo.)
	$a=null;
	$b=null;
	$c= 10;


	echo $a  ?? $b ?? $c;


?>