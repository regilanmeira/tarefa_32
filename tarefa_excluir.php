<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa :: Excluir</title>
</head>
<body>
    <?php
        //inclue as referencias para o BD e o CSS
        include "referencias.php";

        //Capturar do FRONT quem é o ID a ser removido
        $id = $_POST["txtId"];

        //Construir a estrutura do comando DELETE
        $sql = "DELETE FROM tarefa WHERE id = ?";

        //Criar o objeto comando associado a conexão de dados
        $comando = $conexao->prepare($sql);

        //Associar cada parametro do comando SQL com as variáveis
        $comando->bind_param("i",$id);

        //Executar o comando no banco de dados

        if ($comando->execute())
        {
            echo "<h1>Tarefa removida!</h1>";
        }
        else
        {
            echo "<h1>Não foi possível remover a tarefa!</h1>";
        }




    ?>
</body>
</html>