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
    <title>Novo contato</title>
    <script src="f_formatar.js"></script>
</head>

<body>
    <header>
        <div class="container mt-4 mb-4">
            <h1 class="font-weight-bold">Novo contato</h1>
        </div>
    </header>

    <div class="container mt-5">
        <form action="f_novo_contato.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="empresa">Empresa</label>
                    <input type="text" class="form-control" id="empresa" name="empresa">
                </div>
                <div class="form-group col-md-4">
                    <label for="telefone">Telefone (Celular)</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" oninput="formatarTelefoneCelular(this)" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="telefone">Telefone (Fixo)</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" oninput="formatarTelefoneFixo(this)" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" oninput="formatarCEP(this)">
                </div>
                <div class="form-group col-md-8">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control" id="rua" name="rua">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado">
                </div>
                <div class="form-group col-md-8">
                    <label for="pais">País</label>
                    <input type="text" class="form-control" id="pais" name="pais">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="aniversario">Aniversário</label>
                    <input type="date" class="form-control" id="aniversario" name="aniversario">
                </div>
                <div class="form-group col-md-6">
                    <label for="notas">Notas</label>
                    <textarea class="form-control" id="notas" name="notas" rows="3"></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <a href="contatos.php" class="btn btn-success">Voltar</a>
                </div>
                <div class="form-group col-md-6 text-right">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>