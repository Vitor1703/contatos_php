<?php

require_once 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `contatos` WHERE `id`='$id'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    $nome = $row['nome'];
    $sobrenome = $row['sobrenome'];
    $empresa = $row['empresa'];
    $telefone = $row['telefone'];
    $celular = $row['celular'];
    $email = $row['email'];
    $cep = $row['cep'];
    $rua = $row['rua'];
    $bairro = $row['bairro'];
    $cidade = $row['cidade'];
    $estado = $row['estado'];
    $pais = $row['pais'];
    $aniversario = $row['aniversario'];
    $notas = $row['notas'];
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $empresa = $_POST['empresa'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    $aniversario = $_POST['aniversario'];
    $notas = $_POST['notas'];

    $sqlUpdate = "UPDATE `contatos` SET 
    `nome`='$nome',
    `sobrenome`='$sobrenome', 
    `empresa`='$empresa',
    `telefone`='$telefone',
    `celular`='$celular',
    `email`='$email',
    `cep`='$cep',
    `rua`='$rua',
    `bairro`='$bairro',
    `cidade`='$cidade',
    `estado`='$estado',
    `pais`='$pais',
    `aniversario`='$aniversario',
    `notas`='$notas'
    WHERE `id`= '$id'";

    $result = mysqli_query($conn, $sqlUpdate);

    header("Location: contatos.php");
}
