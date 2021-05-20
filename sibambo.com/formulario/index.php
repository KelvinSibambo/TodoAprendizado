<html>
<body>
<?php
  // VALIDAÇÕES
    //Funções (filter_input - Filter_var)
    //FILTER_SANITIZE_SPECIAL_CHARS
    //FILTER_SANITIZE_NUMBER_INT
    //FILTER_SANITIZE_EMAIL
    //FILTER_SANITIZE_URL
?>

<?php
if(isset($_POST['enviar-formulario'])):
	echo "eviou";


endif;
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?> "   method="POST">
Nome <input type="text" name="Nome"><br>
idade <input type="text" name="idade"><br>
email <input type="text" name="email"> <br>


URL: <input type="text" name="url"> <br>
<button type="submit" name="enviar-formulario">enviar</button> <br>


</body>