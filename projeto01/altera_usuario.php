<?php
    include("conexao.php");
    $id_usuario = $_GET['id_usuario'];
    $sql = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";
    $result = mysql_query($con.$sql);
    $row = mysql_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breno - PHP</title>
</head>
<body>

    <h1>Cadastro de Clientes - IFSP</h1>

    <hr>

    <form action = "cadastro_usuario.php" method = "GET">
        
        <div>

            <label for = "nome">Nome: </label>
            <input type = "text" name = "nome"></input>
                value = <?php echo $row['nome']?>

        </div>

        <br>

        <div>
            
            <label for = "email">E-mail: </label>
            <input type = "text" name = "email"></input>

        </div>

        <br>


        <div>
            
            <label for = "telefone">Telefone: </label>
            <input type = "text" name = "telefone"></input>

        </div>
        
        <br>

        <button type = "submit">Enviar</button>

    </form>

</body>
</html>