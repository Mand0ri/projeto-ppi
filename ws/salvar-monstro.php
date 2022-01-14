<pre>
    <?php
    require_once "../model/Monstro.php";
    //print_r($_GET);

    $novoMonstro = new Monstro();

    $novoMonstro
        ->setNome($_GET["nome"])
        ->setTipo($_GET["tipo"])
        ->setNivel($_GET["nd"])
        ->setHp($_GET["hp"])
        ->setFace($_GET["face"])
        ->setId($_GET["id"]);
        
    //print_r($novoMonstro);

    if($novoMonstro->getId() == ''){
        $novoMonstro->salvar();
    }
    else{
        $novoMonstro->atualizar();
    }
    header("Location: ../");
    ?>
</pre>