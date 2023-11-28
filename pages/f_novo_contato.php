<?php

require_once 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$empresa = $_POST['empresa'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
$aniversario = $_POST['aniversario'];
$notas = $_POST['notas'];

$sqlInsert = "INSERT INTO `contatos`(`id`, `nome`, `sobrenome`, `empresa`, `telefone`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `pais`, `aniversario`, `notas`) VALUES 
(null,'$nome','$sobrenome', '$empresa', '$telefone', '$cep', '$rua', '$bairro', '$cidade', '$estado', '$pais', '$aniversario', '$notas')";
$result = mysqli_query($conn, $sqlInsert);

if (!$result) {
    echo 'Query falhou!';
}

header('Location: contatos.php');

?>
