<?php

require_once 'conexao.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM `usuarios` WHERE `email`='$email'";
    $result = mysqli_query($conn, $query);
    $userData = mysqli_fetch_assoc($result);
    $correctSenha = password_verify($senha, $userData['senha'] ?? '');
    
    if ($correctSenha) {
        header("Location: contatos.php");
    } else {
        header("Location: login.php?success=0");
    }
}

?>