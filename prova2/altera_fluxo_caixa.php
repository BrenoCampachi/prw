<?php
   include('conexao.php');

   $id_caixa = $_GET['id_caixa'];

   $sql = 'SELECT * FROM fluxo_caixa where id_caixa='.$id_caixa;

   $result = mysqli_query($con, $sql);

   $row = mysqli_fetch_array($result);

   $data = date('d/m/Y');


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fluxo de Caixa</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>
    <h1><font color="#FF0000">Alterar Fluxo de Caixa</font></h1>
        <div id="teste">
        <form method="post" action="altera_fluxo_caixa_exe.php" enctype="multipart/form-data">
            <fieldset>
                <legend><h1>Alteração</h1></legend>
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="data" id="data" name="data" value="<?php echo $data ?>" placeholder="Digite a data"><p></p>
                </div>
                <div class="form-item">
                    <label for="tipo">Tipo:</label>
                    <input type = "radio" name = "optCaixa" value = "Entrada">Entrada</input>
                    <input type = "radio" name = "optCaixa" value = "Saída">Saída</input>  
                    <br>
                    <br>                
                </div>
                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="valor" id="valor" name="valor" value="<?php echo $row['valor']?>" placeholder="Digite o valor"><p></p>
                </div>
                <div class="form-item">
                    <label for="historico">Histórico:</label>
                    <input type="historico" id="historico" name="historico" value="<?php echo $row['historico']?>" placeholder="Digite o histórico"><p></p>
                </div>
                <div class="form-item">
                    <label for="cheque">Cheque:</label>
                    <br>
                    <select name = "SelMenu" value = "Menu" size = "2">
                        <option>Sim</option>
                        <option>Não</option>
                    </select> 
                    <br>
                    <br>
                </div>
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" ><p></p> 
                    <a href='listar_fluxo_caixa.php'> Voltar</a><p></p>
                </div>
                <input name="id_caixa" type="hidden" value="<?php echo $row['id_caixa']?>">
                
            </fieldset>
        </form>

    </div>
</body>
</html>