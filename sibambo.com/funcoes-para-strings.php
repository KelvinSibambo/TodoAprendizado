<?php
// Funções para Strings
/* 	 tos0 z7'  
 	strtolower
	substr
	str_pad
	str_repeat
	strlen
	str_replace
	strpos
*/

$nome ="kelvin sibambo";
$novonome= strtoupper($nome);
echo $novonome;

echo "<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem, 4,6 );

echo "<hr>";

$objecto = "mouse";
$novoobjecto = str_pad($objecto, 11, "*", STR_PAD_BOTH);
echo $novoobjecto;