<?php 
session_start();

$_SESSION['COR']="VERDE";
$_SESSION['CARRO']= "veloster";

echo $_SESSION['COR']."<br>".$_SESSION['CARRO']."<br>".session_id();
//Aqui só são criadas as funções e imprimidas