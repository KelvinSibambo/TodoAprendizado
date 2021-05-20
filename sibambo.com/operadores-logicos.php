<?php 
// Operadores Lógicos
// Nos permitem fazer comparações entre expressões
//e (&& - and) só returna quqndo as duas expressões são verdadeiras
//ou (||- or)
//ou exclusivo(xor) Só retorna 1 expressão verdadeira, independentemente se as duas são verdadeiras
// negação (!)



$idade=25;
$nome= "rodrigo";

if(($idade==25) xor ($nome=="rodrigo")):
	echo "é verdadeiro";
else:
	echo "é falso";
endif;


 ?>