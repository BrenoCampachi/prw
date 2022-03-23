<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Lista de Exercicios</h1>

<?php

    $op = 'a';
    switch($op)
    {
        case 'a': echo "Abrir"; break;
        case 'f': echo "Fechar"; break;
        case 's': echo "Salvar"; break;
        default: echo "Sair"; break;
    }

?>
</body>
</html>