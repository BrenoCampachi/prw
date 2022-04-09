<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Lista de Exercicios - 3</h1>

<?php

    $cep = '16290000' ;
    
    $parte1 = substr($cep,5,1);

    $parte2 = substr($cep,6,1);

    $parte3 = substr($cep,7,1);
    
    $ultimos = $parte1 . $parte2 . $parte3 ;
    
    echo "O cep é: " . $cep;

    echo "<br>"; 
    echo "<br>";

    echo "Os tres ultimos números do Cep são: " . $ultimos;

?>

</body>
</html>