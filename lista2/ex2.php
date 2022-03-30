<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Lista de Exercicios - 2</h1>

<?php

    $mes = 7;
    echo "O número digitado é: " .$mes;

    switch($mes)
    {
        case 1: echo "O número corresponde ao mês de: Janeiro"; break;
        case 2: echo "O número corresponde ao mês de: Fevereiro"; break;
        case 3: echo "O número corresponde ao mês de: Março"; break;
        case 4: echo "O número corresponde ao mês de: Abril"; break;
        case 5: echo "O número corresponde ao mês de: Maio"; break;
        case 6: echo "O número corresponde ao mês de: Junho"; break;
        case 7: echo "O número corresponde ao mês de: Julho"; break;
        case 8: echo "O número corresponde ao mês de: Agosto"; break;
        case 9: echo "O número corresponde ao mês de: Setembro"; break;
        case 10: echo "O número corresponde ao mês de: Outubro"; break;
        case 11: echo "O número corresponde ao mês de: Novembro"; break;
        case 12: echo "O número corresponde ao mês de: Dezembro"; break;

        default: echo "Erro na Digitação do mês! "; break;
    }
 
?>
</body>
</html>