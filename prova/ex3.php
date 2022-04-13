<?php
    
    echo "<h1>Prova de Programação - 1° Bimestre</h1>";
    echo "<h1>Exercício 3</h1>";

    $nome = $_GET["nome"];
    $altura = $_GET["altura"];
    $peso = $_GET["Peso"];

    if (isset($_GET["nome"])) 
    {
        
            echo "<h2>Pessoa Cadastrada</h2>" ;
                
            echo "Nome: " . $nome . "<br><br>";

            echo "Altura: " . $altura . "<br><br>";

            echo "Peso: " . $peso . "<br><br>";

            $imc = $peso / ($altura * $altura);

            if($imc < 17)
            {
                echo "O IMC é igual a: " . $imc;
                echo "<br>";
                echo "<br>";
                echo "A Situação é: Muito abaixo do peso!";
            }
            else
            {
                if($imc >=17 && $imc <= 18.49)
                {
                    echo "O IMC é igual a: " . $imc;
                    echo "<br>";
                    echo "<br>";
                    echo "A Situação é: Abaixo do peso!";
                }
                else
                {
                    if($imc >= 18.5 && $imc <= 24.99)
                    {
                        echo "O IMC é igual a: " . $imc;
                        echo "<br>";
                        echo "<br>";
                        echo "A Situação é: Peso normal!";  
                    }
                    else
                    {
                        if($imc >= 25 && $imc <= 29.99)
                        {
                            echo "O IMC é igual a: " . $imc;
                            echo "<br>";
                            echo "<br>";
                            echo "A Situação é: Acima do peso!"; 
                        }
                        else
                        {
                            if($imc >= 30 && $imc <= 34.99)
                            {
                                echo "O IMC é igual a: " . $imc;
                                echo "<br>";
                                echo "<br>";
                                echo "A Situação é: Obesidade 1!";
                            }
                            else
                            {
                                if($imc >= 35 && $imc <= 39.99)
                                {
                                    echo "O IMC é igual a: " . $imc;
                                    echo "<br>";
                                    echo "<br>";
                                    echo "A Situação é: Obesidade 2 (severa)!";
                                }
                                else
                                {
                                    if($imc >= 40)
                                    {
                                        echo "O IMC é igual a: " . $imc;
                                        echo "<br>";
                                        echo "<br>";
                                        echo "A Situação é: Obesidade 3 (mórbida)!";    
                                    }
                                }
                            }
                        }
                    }
                }
            }
    }
?>