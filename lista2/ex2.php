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

    switch($mes)
    {
        case 1: echo "Janeiro"; break;
        case 2: echo "Fevereiro"; break;
        case 3: echo "Março"; break;
        case 4: echo "Abril"; break;
        case 5: echo "Maio"; break;
        case 6: echo "Junho"; break;
        case 7: echo "Julho"; break;
        case 8: echo "Agosto"; break;
        case 9: echo "Setembro"; break;
        case 10: echo "Outubro"; break;
        case 11: echo "Novembro"; break;
        case 12: echo "Dezembro"; break;

        default: echo "Erro na Digitação do mês! "; break;
    }
 
?>
</body>
</html>