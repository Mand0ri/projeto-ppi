
function confirm() {
    let resposta = confirm("Tem certeza que deseja deletar esse item?")

    if (resposta == true) {
        
        alert("Item deletado com sucesso.")
        window.location.href = "../ws/deletar-monstro.php?id=<?= $m->getId(); ?>"
    }
    else {
        alert("Exclusão cancelada.")
    }
}
