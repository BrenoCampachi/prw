<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Lista de Exercicios</h1>

<?php
    
    $maior;
    $meio;
    $menor;

    $n1 = 4;
    $n2 = 8;
    $n3 = 3;
    
    if($n1 > $n2 && $n1 > $n3)
    {
        $maior = $n1;

        if($n2 > $n3)
        {
            $meio = $n2;
            $menor = $n3;
        }
        elseif($n3 > $n2)
        {
            $meio = $n3;
            $menor = $n2;
        }
    }
    
    
?>
</body>
</html>