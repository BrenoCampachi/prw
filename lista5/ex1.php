<?php
    
    echo "<h1>Exercício 1 --- Lista 5</h1>";

    $nomep = $_GET["nome"];
    $vetor = array('Microfone' , 'Placa de Vídeo' , 'Gabinete' , 'Memória Externa' , 'Impressora' , 'Mouse' , 'Xerox' , 'Teclado' , 'Processador');
    echo $nomep . " está na posição: " . array_search($nomep, $vetor);

?>