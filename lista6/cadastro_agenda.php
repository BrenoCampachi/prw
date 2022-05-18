<?php
    include('conexao_agenda.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    echo "<h1> Cadastro da Agenda</h1>";
    echo "<p> Nome: " . $nome . "<br><br>";
    echo "Email: " . $email . "<br><br>";
    echo "Telefone: " . $telefone . "</p><br>";
	
	$sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, data_cadastro) 
	        VALUES ('".$nome."','".$apelido."','".$endereço."', '".$bairro."', '".$cidade."', '".$estado."', '".$telefone."', '".$celular."', '".$email."', '".$data_cadastro."')";
	    
	$result = mysqli_query($con, $sql);

	if($result)

		echo "Dados inseridos com sucesso<br><br>";

	else

		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);

?>

<a href='index.php'> Voltar</a>