<?php

// variaveis de coenxão para o banco de dados
$host ="10.68.45.25";
$usuario = "senac";
$senha = "senac123";
$banco = "atividades";
// criar a conexão com o banco de dados usando mysql
//  mysqli = biblioteca do php para acessar um banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);
// verificar se a conexão fi bem sucedida
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>
