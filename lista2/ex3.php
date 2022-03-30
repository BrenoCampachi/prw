<!DOCTYPE html>

<html>

<head>

<meta charset=”UTF-8”/>

<title>Breno - PHP</title>

</head>
<body>
<h1>Lista de Exercicios - 2</h1>

<?php

    for($i=1;$i<=200;$i++)
    {
        
        if( ($numero/$i)%$i != 0 ){
            echo "$numero é primo";
          }else{
            echo "$numero não é primo";
          }
        
    }
 
?>
</body>
</html>