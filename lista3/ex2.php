<?php
    $vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    
    $palavra = "Estudantes" ;

    $nova_Palavra = str_replace($vogais, "x", $palavra);
    
    echo "Palavra: ". $palavra. "<br><br>" ;

    echo "Nova palavra: ". $nova_palavra ;

?>