<?php
    
    echo "<h1>Exercício --- 1</h1>" ;

    $num1 = $_GET["numero1"] ;
    $num2 = $_GET["numero2"] ;

    $somar = $_GET["numero1"]  + ($_GET["numero2"]);
    $subtrair = $_GET["numero1"]  - ($_GET["numero2"]);
    $dividir = $_GET["numero1"]  / $_GET["numero2"];
    $multiplicar = $_GET["numero1"]  * $_GET["numero2"];

    if (isset($_GET["numero1"]) and isset($_GET["numero2"])) 
    {
        if ($_GET["optOperacao"] == "Somar") 
        {
            echo $num1 . " + " . $num2 . " = " . $somar;
        }
        else
        {
            if ($_GET["optOperacao"] == "Subtrair") 
            {
                echo $num1 . " - " . $num2 . " = " . $subtrair;
            }
            else 
            {
                if ($_GET["optOperacao"] == "Dividir") 
                {
                    echo $num1 . " / " . $num2 . " = " . $dividir;
                }
                else
                {
                    echo $num1 . " * " . $num2 . " = " . $multiplicar;
                }
            }
        }   
    }
?>