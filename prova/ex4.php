<?php
    
    echo "<h1>Prova de Programação - 1° Bimestre</h1>";
    echo "<h1>Exercício 4</h1>";

    $nome = $_GET["nome"];
    $estado = $_GET["Estado"];
    $sexo = $_GET["optsexo"];
    $rg = $_GET["rg"];
    $cpf = $_GET["cpf"];
    $saldo = $_GET["saldo"];
    $total = $_GET["total"];

    if (isset($_GET["nome"])) 
    {
        
            echo "<h2>Pessoa Cadastrada</h2>";
                
            echo "Nome do cliente: " . $nome . "<br><br>";

            echo "Estado: " . $estado . "<br><br>";

            echo "Sexo: " . $sexo . "<br><br>";

            echo "RG: " . $rg . "<br><br>";

            echo "CPF: " . $cpf . "<br><br>";

            echo "Saldo do cartão de crédito: " . $saldo . "<br><br>";

            echo "Toltal da compra: " . $total . "<br><br>" ;

            echo "-----------------------------------------";
            echo "<br>";

            if(empty($nome))
            { 
                echo "O Nome do cliente esta em branco";
                echo "<br>";
                echo "<br>";
            }
            if(empty($rg))
            { 
                echo "O RG do cliente esta em branco";
                echo "<br>";
                echo "<br>";
            }
            if(empty($cpf))
            { 
                echo "O CPF do cliente esta em branco";
                echo "<br>";
                echo "<br>";
            }

            if($saldo < $total)
            {
                echo "Saldo Insuficiente para Concluir Compra!";
                echo "<br>";
                echo "<br>";
            }
            else
            {
                $novo_saldo = $saldo - $total;
                echo "O seu saldo após a compra é de: " . $novo_saldo;
            }





    }
?>