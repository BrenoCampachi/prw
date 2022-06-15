<?php
    include("conexao.php");

    $id_caixa = $_POST["id_caixa"];

    $data = date("Y-m-d");

    $data = implode("/",array_reverse(explode("-",$data)));

    $tipo = $_POST['optCaixa'];

    $valor = $_POST['valor'];

    $historico = $_POST['historico'];

    $cheque = $_POST['SelMenu'];


    echo "<h1><font color=#FF0000>Alterar Fluxo de Caixa</font></h1>";
        
    echo "Data: $data
    <br><br>Tipo: $tipo
    <br><br>Valor: $valor
    <br><br>Histórico: $historico
    <br><br>Cheque: $cheque";
    
    $sql = "UPDATE fluxo_caixa SET
    data='".$data."',
    tipo='".$tipo."',
    valor='".$valor."',
    historico='".$historico."',
    cheque='".$cheque."'
    WHERE id_caixa=".$id_caixa;
              
    $result = mysqli_query($con, $sql);

    if ($result) 
    {
        echo "<h4><font color=#32CD32>Dados alterados com sucesso!<br><br></font></h4>";
    } 
    else 
    {
        echo "<h4><font color=#FF0000>Erro ao tentar alterar os dados<br><br></font></h4>" .mysqli_error($con)."<br>";
    }
?>

<a href="index.php">Voltar</a>