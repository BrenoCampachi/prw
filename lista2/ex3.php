<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Lista de Exercicios - 2</h1>

<?php

    for($repeticao=1;$repeticao<=200;$repeticao++)
    {
        echo "O número é: " .$repeticao;
        echo "<br>";

        if($repeticao / 1 !=0)
        {
            echo "Esse número é primo!";
            echo "<br>";
        }
        else
        {
            echo "Esse número não é primo!";
            echo "<br>";
        }
        
    }
 
?>
</body>
</html>