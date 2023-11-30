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

?>