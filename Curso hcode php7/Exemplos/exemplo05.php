<?php
$nome="Glucio";


function teste(){

	global $nome;
	echo $nome;

}

function teste2(){
	$nome="joao";
	echo $nome;

}

teste2();



?>