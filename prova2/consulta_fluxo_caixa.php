<?php
    
    if($tipo == "entrada"){
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
    } else if($tipo == "saida"){
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
    } else if($tipo == "saldo"){
        $sql = "select sum(case when tipo = 'entrada' then valor else O end) - sum(case when tipo = 'saida' then valor from fluxo_caixa)";
    }

?>