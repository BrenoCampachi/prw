<?php
    include('conexao.php');

    $id_caixa = $_GET['id_caixa'];

    $sql = 'DELETE FROM fluxo_caixa WHERE id_caixa='.$id_caixa;

    echo "<h1> <font color=#FF0000>Exclusão de Fluxo do Caixa</font></h1> ";

	$result = mysqli_query($con, $sql);

	if($result)

        echo "<h4><font color=#32CD32>Registro excluído com sucesso!<br><br></font></h4>";

	else

        echo "<h4><font color=#FF0000>Erro ao tentar excluir o contato!<br><br></font></h4>" .mysqli_error($con)."<br>";
  
?>

<a href='listar_fluxo_caixa.php'> Voltar</a>