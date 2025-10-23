<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "projeto";

// $servidor = "10.23.200.119";
//  $usuario = "root";
//  $senha = "web";
//  $bd = "projeto";


// Criando nova conexão 
global $conexao;
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
// Verificar a conexão 
if (!$conexao) {
    die("Falha na conexão" . mysqli_connect_error());
}
