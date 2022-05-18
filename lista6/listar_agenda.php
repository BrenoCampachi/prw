<?php 

    include ('conexao_agenda.php');
    $sql = 'SELECT * FROM agenda';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem da Agenda</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>

    <h1 align="center">Listagem da Agenda</h1><br>
    <table align="center" border="1" width="600">

        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Data do Cadastro</th>
            <th>Excluir</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id_agenda']. "</td>";
                echo "<td><a href='altera_usuario.php?id_usuario=".$row['id_usuario']."'>" .$row['nome_usuario']. "</a></td>";
                echo "<td>" .$row['email_usuario']. "</td>";
                echo "<td>" .$row['telefone_usuario']. "</td>";
                echo "<td><a href='excluir_usuario.php?id_usuario=".$row['id_usuario']."'>Excluir</a></td>";                
                echo "</tr>";
            }
        ?>

    </table>

</body>

<h3>
    <a href='index.php'> Voltar</a>
</h3>

</html>