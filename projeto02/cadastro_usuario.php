<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    echo "<h1> Cadastro de Usuários</h1>";
    echo "<p> Nome: " . $nome . "<br><br>";
    echo "Email: " . $email . "<br><br>";
    echo "Telefone: " . $telefone . "</p><br>";
	
	$sql = "INSERT INTO usuario (nome_usuario,email_usuario,telefone_usuario) 
	        VALUES ('".$nome."','".$email."','".$telefone."')";
	    
	$result = mysqli_query($con, $sql);

	if($result)

		echo "Dados inseridos com sucesso<br><br>";

	else

		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);

?>

<a href='index.php'> Voltar</a>