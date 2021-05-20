<?php
// Funções para Números
/* 
	number_format
	round 	AREDONDA OS NÚMEROS
	ceil    ARREDONDA OS NUMEROS PARA frente
	floor   ARREDONDA OS NUMEROS PARA Trás
	rand    Apresenta números aleatóeios de um parâmetro dado por mim
*/

	$db=1234.56;
	$preco= number_format($db,2,",",".");
	echo "O valor do producto é ".$preco."  Mt";

	echo "<hr>";

	echo round(3.49);

	echo "<hr>";

	echo ceil(8.90);
	echo "<hr>";

	echo floor(90.99);
	echo "<hr>";

	echo rand(1,20);