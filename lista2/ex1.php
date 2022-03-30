<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Lista de Exercicios</h1>

<?php

    $par = 0;
    
    for($repeticao=1;$repeticao<100;$repeticao++)
    {
        if($repeticao % 2 == 0)
        {
            $par = $par + $repeticao;
        }

    }

    $soma = $par + $par;
    echo $par;
 
?>
</body>
</html>