<?php
    
    echo "<h1>Exercício 2 da Lista 4</h1>" ;

    $nome = $_GET["nome"] ;
    $idade = $_GET["Idade"] ;
    $descricao = $_GET["TextDesc"] ;
    $genero = $_GET["optGenero"];
    $formacao = null ;

    if ($_GET["SelMenu"] == "Incompleto") 
    {
        $formacao = "Ensino médio: Incompleto" ;
    }
    else
    {
        if ($_GET["SelMenu"] == "Cursando") 
        {
            $formacao = "Ensino médio: Cursando" ;
        }
        else
        {
            if ($_GET["SelMenu"] == "Completo") 
            {
                $formacao = "Ensino médio: Completo" ;
            }
        }
    }

    if (isset($_GET["optGenero"])) 
    {
        if (isset($_GET["SelMenu"])) 
        {
            echo "<h2>Usuário Cadastrado</h2>" ;
                
            echo "Nome: " . $nome . "<br><br>";

            echo "Idade: " . $idade . "<br><br>";

            echo "Gênero: " . $genero . "<br><br>" ;

            echo "Linguagens que domina: <br><br>" ;

            if (isset($_GET["chkPHP"])) 
            {
                echo "PHP  <br>" ;
            }

            if (isset($_GET["chkC"])) 
            {
                echo "C++  <br>" ;
            }

            if (isset($_GET["chkJava"])) 
            {
                echo "Java  <br>" ;
            }

            if (isset($_GET["chkPython"])) 
            {
                echo "Python  <br>" ;
            }

            echo "<br>" . $formacao ;

            echo "<br><br>Mais sobre o usuário: <br><br>" . "'" . $descricao . "' " ;
        }   
    }
?>