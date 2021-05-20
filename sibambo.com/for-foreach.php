<?php

for($contador=0; $contador<=10;$contador++):
	echo "7 x $contador =".($contador*7)."<br>";
endfor;

echo "<hr>";

$cores = array('Verde', 'Vermelho', 'Azul' );
foreach($cores as $indice => $valor):
	echo $indice."-" .$valor."<br>";
endforeach;