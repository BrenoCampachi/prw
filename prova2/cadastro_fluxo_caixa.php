<?php
    include('conexao.php');

    $tipo = $_POST['optCaixa'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['SelMenu'];

    $data = date('d/m/Y');

    //

    echo "<h1> <font color=#FF0000>Cadastro do Fluxo de Caixa</font></h1> ";
    echo "<p> Data: " . $data . "<br><br>";
    echo "<p> Tipo: " . $tipo . "<br><br>";
    echo "Valor: " . $valor . "<br><br>";
    echo "Histórico: " . $historico . "</p><br>";
    echo "Cheque: " . $cheque . "</p><br>";

	//

	$sql = "INSERT INTO fluxo_caixa (tipo, valor, historico, cheque) 
	        VALUES ('".$tipo."','".$valor."','".$historico."', '".$cheque."')";
	    
	$result = mysqli_query($con, $sql);

    //

	if($result)

        echo "<h4> <font color=#32CD32>Dados inseridos com sucesso!<br><br></font></h4>";

	else

		echo "<h4> <font color=#FF0000>Erro ao tentar inserir dados no banco de dados!<br><br></font></h4> ".mysqli_error($con);

?>

<a href='index.php'> Voltar</a>