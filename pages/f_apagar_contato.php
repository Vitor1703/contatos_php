<?php

require_once 'conexao.php';

$id = $_GET['id'];
$sqlDelete = "DELETE FROM CONTATOS WHERE id = $id";
$result = mysqli_query($conn, $sqlDelete);

header("Location: contatos.php");

?>
