<?php
//criando funções

function exibirNome($nome){
	echo "Meu nome é $nome";
}

exibirNome("Kelcin sibambo");

echo "<hr>";

function calcularMedia($nome,$nota1,$nota2,$nota3,$nota4){
	$media=($nota1+$nota2+$nota3+$nota4)/4;
	if($media>=7):
		echo "$nome foi aprovado com a média $media";
	else:
		echo "$nome foi reprovado com a média: $media";
	endif;
}
calcularMedia("bob",5,6,15,12);