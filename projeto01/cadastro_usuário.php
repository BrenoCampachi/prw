<?php
    
    echo "<h1>Cadastro do usuário</h1>";

    $nome = $_GET["nome"];
    $email = $_GET["Email"];
    $telefone = $_GET["telefone"];

    if (isset($_GET["nome"])) 
    {
        echo "-----------------------------------------";
            echo "<br>";

            echo "<h2>Cliente Cadastrado</h2>";
                
            echo "Nome do cliente: " . $nome . "<br><br>";

            echo "E-mail: " . $email . "<br><br>";

            echo "Telefone: " . $telefone . "<br><br>";

            echo "-----------------------------------------";
            echo "<br>";

    }
?>