<?php
require_once 'conexao.php';
require_once 'f_editar_contato.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Editar contato</title>
    <script src="f_formatar.js"></script>
</head>

<body>
    <header>
        <div class="container mt-4 mb-4">
            <h1 class="font-weight-bold">Editar contato</h1>
        </div>
    </header>

    <div class="container mt-5">
        <form action="f_editar_contato.php?id=<?= $row['id'] ?>" method="POST">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?= $sobrenome ?>"
                        required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="empresa">Empresa</label>
                    <input type="text" class="form-control" id="empresa" name="empresa" value="<?= $empresa ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="celular">Telefone (Celular)</label>
                    <input type="tel" class="form-control" id="celular" name="celular"
                        oninput="formatarTelefoneCelular(this)" required value="<?= $celular ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="telefone">Telefone (Fixo)</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone"
                        oninput="formatarTelefoneFixo(this)" required value="<?= $telefone ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="<?= $cep ?>">
                </div>
                <div class="form-group col-md-8">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control" id="rua" name="rua" value="<?= $rua ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $bairro ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $cidade ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" value="<?= $estado ?>">
                </div>
                <div class="form-group col-md-8">
                    <label for="pais">País</label>
                    <input type="text" class="form-control" id="pais" name="pais" value="<?= $pais ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="aniversario">Aniversário</label>
                    <input type="date" class="form-control" id="aniversario" name="aniversario"
                        value="<?= $aniversario ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="notas">Notas</label>
                    <textarea class="form-control" id="notas" name="notas" rows="3"><?= $notas ?></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="update">Salvar</button>
        </form>
    </div>

</body>

</html>