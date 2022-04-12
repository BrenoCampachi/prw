<?php
    
    echo "<h1>Exercício 2 - Lista 5</h1>";

    $nomep = $_GET["nome"];
    $precop = $_GET["preco"];

    $vetor1 = array('Microfone' , 'Placa de Vídeo' , 'Gabinete' , 'Memória Externa' , 'Impressora' , 'Mouse' , 'Xerox' , 'Teclado' , 'Processador');
    $vetor2 = array('54,89' , '3100,90' , '600,00' , '1000,00' , '2590,00' , '136,89' , '2456,98' , '78,90' , '3890,90');

    $posicao_pro = array_search($nomep, $vetor1);
    $posicao_pre = array_search($precop, $vetor2);

    if ($posicao_pro == $posicao_pre) 
    {
        echo $nomep . " este produto custa: R$ " . $precop . " reais";   
    }
    else
    {
        echo $nomep . ", este produto possui outro preço!";
    }

?>