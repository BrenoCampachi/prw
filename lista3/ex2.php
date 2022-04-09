<?php
    $vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    
    $palavra = "Estudantes" ;

    $Nova_Palavra = str_replace($vogais, "x", $valavra);
    
    echo "Palavra: ". $palavra. "<br><br>" ;

    echo "Nova palavra: ". $nova_palavra ;

?>