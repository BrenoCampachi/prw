<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Prova de Programação - 1° Bimestre</h1>
<h1>Exercício 1</h1>

<?php

    $salario = 400;

    if($salario <= 300)
        {
            $reajuste = ($salario *50)/100;
            $novo_salario = ($salario + $reajuste);
            echo "O salário é menor ou igual a 300, reajuste de 50%!";
            echo "<br>";
            echo "Novo salário: " . $novo_salario;

        }
        else
        {
            if($salario > 300)
            {
                $reajuste = ($salario *30)/100;
                $novo_salario = ($salario + $reajuste);
                echo "O salário é maior 300, reajuste de 30%!";
                echo "<br>";
                echo "Novo salário: " . $novo_salario; 
            }
        }
    
?>
</body>
</html>