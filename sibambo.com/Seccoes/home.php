<?php 
session_start();

echo $_SESSION['COR']. "<br>". $_SESSION['CARRO']."<br>".session_id();
//Aqui só imprime as funcoes dadas pelo  index.