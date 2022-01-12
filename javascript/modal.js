const botao = document.querySelector('#botaoVisualizar')
const modal = document.querySelector('#modalConcluido')
const botaoFechar = document.querySelector('#botaoFechar')
const botaoVisualizar = document.querySelector('#botaoVisualizar')

function abrirModalConcluido() {
  $('#modalConcluido').modal('show')
}

botaoVisualizar.addEventListener('click', () => {
  console.log('Opa')
})

