<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Lista de Exercicios - 3</h1>

<?php
    $vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    
    $palavra = "Funcionarios" ;

    $nova_palavra = str_replace($vogais, "x", $palavra);
    
    echo "Palavra: ". $palavra. "<br><br>" ;

    echo "Nova palavra é: ". $nova_palavra ;

?>

</body>
</html>