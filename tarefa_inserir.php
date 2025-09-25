<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa :: Inserir</title>

    <?php 
        include "referencias.php";
    ?>
</head>
<body>

<?php
//1º PASSO: Capturar os dados de entrada
$descricao = $_POST["txtDescricao"];
$data_entrega = $_POST["txtData"];
$prioridade = $_POST["txtPrioridade"];
$responsavel = $_POST["txtResponsavel"];

//2º PASSO: Montar o comando SQL - Insert
$sql = "INSERT INTO tarefa(descricao,data_entrega,prioridade,responsavel) VALUES(?,?,?,?)";

//3º PASSO: Preparar o comando SQL para ser executado
//Ou seja, relacionar o comando SQL que será executado
$comando = $conexao->prepare($sql);

//4º PASSO: Vincular os ? com as variáveis de 
//entrada de dados
$comando->bind_param("ssss",$descricao,$data_entrega,$prioridade,$responsavel);

//5º PASSO: Executar o comando
if ($comando->execute())
{
    echo "<h1>Tarefa agendada</h1>";
}
else
{
    echo "<h1>Erro!</h1>";
}

?>
    
</body>
</html>