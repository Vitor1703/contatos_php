<?php

require_once 'conexao.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `usuarios` WHERE `email`='$email'";
    $result = mysqli_query($conn, $query);
    $userData = mysqli_fetch_assoc($result);
    $correctPassword = password_verify($password, $userData['password'] ?? '');
    
    if ($correctPassword) {
        header("Location: pages/contatos.php");
    } else {
        header("Location: pages/login.php?success=0");
    }
}

?>