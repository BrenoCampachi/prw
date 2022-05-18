<?php
   include('conexao_agenda.php');

   $id_usuario = $_GET['id_agenda'];

   $sql = 'SELECT * FROM agenda where id_agenda='.$id_agenda;

   $result = mysqli_query($con, $sql);

   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Agenda</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>
    <h1>Alterar Contato</h1>
    <div id="teste">

        <form method="post" action="altera_usuario_exe.php">
            <fieldset>
                <legend><h1>Alteração</h1></legend>
                <div class="form-item">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $row['nome']?>" placeholder="Digite o nome"><p></p>
                </div>
                <div class="form-item">
                    <label for="apelido">Apelido</label>
                    <input type="apelido" id="apelido" name="apelido" value="<?php echo $row['apelido']?>" placeholder="Digite o apelido"><p></p>
                </div>
                <div class="form-item">
                    <label for="endereco">Endereço:</label>
                    <input type="endereco" id="endereco" name="endereco" value="<?php echo $row['endereco']?>" placeholder="Digite o endereco"><p></p>
                </div>
                <div class="form-item">
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" value="<?php echo $row['telefone']?>" placeholder="Digite o Telefone"><p></p>
                </div>
                <div class="form-item">
                    <label for="cidade">Cidade:</label>
                    <input type="cidade" id="cidade" name="cidade" value="<?php echo $row['cidade']?>" placeholder="Digite a cidade"><p></p>
                </div>
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" ><p></p>
                    
                    <a href='listar_agenda.php'> Voltar</a><p></p>
                </div>
                <input name="id_usuario" type="hidden" value="<?php echo $row['id_agenda']?>">
                
            </fieldset>
        </form>

    </div>
</body>
</html>