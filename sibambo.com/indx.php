<?php



//Array associativo
$pessoa= array ("nome"=> "Rodrigo", "idade"=> 23, "altura"=> 1.75);
$pessoa ["cidade"]= "Maputo";
print_r($pessoa);
echo "<hr>";

foreach ($pessoa as $indice => $valor){
	echo $indice.":".$valor."<br>";
}
echo "<hr>";

//Array multidimensional
$times = array (
	"cariocas"=> array ("campeao" =>"vasco", "vice"=> "flamengo","terceiro"=> "botafogo"),
	"portugesa" => array("Actual campeao"=>"benfica","Segundo campeao"=> "sporting","Terceiro lugar"=> "porto"),
	"mocambola"=> array("1º Lugar"=>"costa do sol","2º Lugar" =>"Academica","3º"=> "hcb songo")
);

echo "<br>";

foreach ($times["cariocas"] as $indice => $valor){
	echo $indice.":". $valor."<br>";
}
echo "<hr>";

//Para Liga portuguesa
foreach ($times["portugesa"] as $indice => $valor) {
echo $indice.":".$valor."<br>";
}
	
/*liga mde mocambique
foreach ($times["mocambola"] as $indice =>$valor){
	echo $indice-":".$valor. "<br>;
}
echo "<br";
echo "<hr>";
/*





