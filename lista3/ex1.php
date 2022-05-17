<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Lista de Exercicios --- 3</h1>

<?php

    $palavra = "Paralelepipedo";
    echo "A variável contém: " . strlen($palavra) . "caracteres" . "<br>";
    $palavra = trim($palavra);
    echo "A variável agora contém: " . strlen($palavra) . "caracteres";
 
?>
</body>
</html>