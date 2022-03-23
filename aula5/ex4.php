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
        if($n2 > $n3)
        {
            echo $n1." ".$n2." ".$n3;
        }
        else
        {
            echo $n1." ".$n3." ".$n2;
        }
    }

    if($n2 > $n1 && $n2 > $n3)
    {
        if($n1 > $n3)
        {
            echo $n2." ".$n1." ".$n3;
        }
        else
        {
            echo $n2." ".$n3." ".$n1;
        }
    }

    if($n3 > $n1 && $n3 > $n2)
    {
        if($n1 > $n2)
        {
            echo $n3." ".$n1." ".$n2;
        }
        else
        {
            echo $n1." ".$n2." ".$n1;
        }
    }
 
?>
</body>
</html>