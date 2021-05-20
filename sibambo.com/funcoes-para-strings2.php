<?php




$string= str_repeat("sucesso!", 5);
echo $string;

echo "<hr>";

$mensagem ="Olá mundo";
echo strlen($mensagem);

echo "<hr>";

$texto= "A seleçao Argentina será campeã da copa do mundo em 2018.";
$novotexto= str_replace("Argentina","Moçambicana",$texto);

echo $novotexto;
echo "<hr>";

echo strpos($texto, "copa");