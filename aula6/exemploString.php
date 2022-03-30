<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Aula da semana 6 - Exemplo do String</h1>

<?php
    
    $palavra = "Ciência da Computação ";
    echo "A variável contém: " . strlen($palavra) . "caracteres”" . "<br>";
    $palavra = trim($palavra);
    echo "A variável agora contém: " . strlen($palavra) . "caracteres";

    
?>
</body>
</html>