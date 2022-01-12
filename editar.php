<?php
require_once "model/Monstro.php";

if (isset($_GET["id"])) {
    $monstro = Monstro::retornarPorId($_GET["id"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código im Kafig</title>
    <!-- Frameworks -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Bootstrap 4.6v -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- JS Bundle -->
    <!-- CSS personalizado -->
    <link href="/css/css_for_all.css" rel="stylesheet">
    <!-- JS personalizado -->
    <script src="javascript/modal.js" defer></script>
    <script src="javascript/monstro.js" defer></script>
    <script src="javascript/script.js" defer></script>
    <!-- Icon export -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header class="d-flex">
        <img src="materials/img/logo.png" alt="logo" width=100 height=120 id="logo">
        <h1>Código im Kafig</h1>
        <h2>Edição de Monstro</h2>
    </header>

    <?php
    include "inc/nav.php";
    ?>


    <main>
        <form action="ws/salvar-monstro.php" class="container" id="formPrincipal">
            <div class="form-group">
                <label for="nome">Nome da Criatura</label>
                <input type="text" required maxlength="40" class="form-control" id="nome" name="nome" autofocus placeholder="Beholder" value="<?= isset($monstro) ? $monstro->getNome() : ''; ?>">
            </div>

            <div class="form-group">
                <label for="nd">Nível de dificuldade</label>
                <input type="number" required max="40" class="form-control" id="nd" name="nd" value="<?= isset($monstro) ? $monstro->getNivel() : ''; ?>">
            </div>

            <div class="form-group">
                <label for="tipo">Tipo de Criatura</label>
                <input type="text" required maxlength="15" class="form-control" id="tipo" name="tipo" value="<?= isset($monstro) ? $monstro->getTipo() : ''; ?>">
            </div>

            <div class="form-group">
                <label for="hp">Pontos de Vida</label>
                <input type="number" max="2000" required class="form-control" id="hp" name="hp" value="<?= isset($monstro) ? $monstro->getHp() : ''; ?>">
            </div>

            <div class="custom-file">
                <input type="file" class="custom-file-input" id="face" name="face" value="<?= isset($monstro) ? $monstro->getFace() : ''; ?>" required>
                <label class="custom-file-label" for="face">Manda-me uma foto da criatura!</label>
            </div>
            <input type="hidden" name="id" value="<?= isset($monstro) ? $monstro->getId() : ''; ?>">
            <input type="submit" value="Salvar" class="btn bot1 d-flex" id="botaoSalvar">

        </form>
    </main>
    <?php
    include "inc/footer.php";
    ?>
</body>

</html>