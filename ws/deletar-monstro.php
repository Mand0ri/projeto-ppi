<?php
require_once "../model/Monstro.php";
//echo $_GET["id"];


echo "<script type = 'text/javascript'>
            if (confirm('Tem certeza que deseja excluir este monstro?')) {
                var excluir = '1';
                alert('Monstro excluido com sucesso!');
                location.href = '../lista.php'
                 }
            else {
                var excluir = '0';
                alert('Exclusão cancelada');
                location.href = '../lista.php' }
            </script>
            ";

$variavelphp = "<script type='text/javascript'>document.write(excluir)</script>";

if ($variavelphp == $variavelphp) {
    Monstro::deletar($_GET["id"]);
}
