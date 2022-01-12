<?php
require_once "model/Monstro.php";

if (isset($_GET["id"])) {
    $monstro = Monstro::retornarPorId($_GET["id"]);
    print_r($monstro);
}
?>
<!DOCTYPE html>
<html lang="pt">

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
    <script src="javascript/all.js" defer></script>
    <script src="javascript/script.js" defer></script>
    <!-- Icon export -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <header class="d-flex">
        <img src="/materials/img/logo.png" alt="logo" width=100 height=120 id="logo">
        <h1>Código im Kafig</h1>
        <h2>Catálogo</h2>
    </header>
    <?php
    include "inc/nav.php";
    ?>


    <main>
        <table class="container table">
            <thead>
                <tr class="tabela">
                    <th>#</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Nível de dificuldade</th>
                    <th>Pontos de vida</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <?php
            $monstros = Monstro::retornarTodos();
            foreach ($monstros as $m) :
            ?>
                <!-- Comment -->
                <tr>
                    <td> <?php echo $m->getId(); ?> </td>
                    <td> <?= $m->getNome(); ?> </td>
                    <td> <?= $m->getTipo(); ?> </td>
                    <td> <?= $m->getNivel(); ?> </td>
                    <td> <?= $m->getHp(); ?> </td>
                    <td>
                        <a href="editar.php?id=<?= $m->getId(); ?>" class="btn btn-secondary material-icons">
                            build
                        </a>
                    </td>
                    <td>

                        <a href="ws/deletar-monstro.php?id=<?= $m->getId(); ?>" class="btn material-icons">delete</a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
    </main>
    <?php
    include "inc/footer.php";
    ?>
</body>

</html>