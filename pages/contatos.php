<?php
require_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>Contatos</title>
</head>

<body>
  <header>
    <div class="container mt-4 mb-4">
      <h1 class="font-weight-bold">Meus contatos</h1>
      <p>Listagem com seus contatos.</p>
    </div>
  </header>

  <div class="container mt-2 mb-2">
    <button class="btn btn-primary rounded">
      <i class="fas fa-plus"></i> Novo Contato
    </button>
  </div>

  <div class="container mt-2">
    <table class="table table-striped">
      <!-- Header -->
      <thead class="thead-dark">
        <tr>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Localidade</th>
          <th>Notas</th>
          <th>Opções</th>
        </tr>
      </thead>

      <!-- Data -->
      <tbody>
        <?php
        $query = "SELECT * FROM `contatos`";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['nome'] ?></td>
            <td><?php echo $row['sobrenome'] ?></td>
            <td><?php echo $row['telefone'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['cidade'] ?></td>
            <td><?php echo $row['notas'] ?></td>
            <td>
              <a href="f_editar_contato.php?id=<?= $row['id'] ?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="f_apagar_contato.php?id=<?= $row['id'] ?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i>
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>