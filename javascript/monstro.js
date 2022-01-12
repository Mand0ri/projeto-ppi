class Monstro {
  constructor() {
    this.id = 1;
  }
  salvar() {
    let monstro = this.lerDados();
    this.adicionar(monstro);
    console.log(this.arrayMonstro)
    localStorage.setItem('monstro', JSON.stringify(this.arrayMonstro))
  }
  
  listarMonstro() {
    let tbody = document.getElementById('corpo')

    let arrayPag2 = JSON.parse(localStorage.getItem('monstro'))
    console.log(arrayPag2);

    for (let i = 0; i < arrayPag2.length; i++) {
      let tr = tbody.insertRow();
      let td_nome = tr.insertCell();
      let td_nivel = tr.insertCell();
      let td_tipo = tr.insertCell();
      let td_pv = tr.insertCell();
      let img = tr.insertCell();
      td_nome.innerText = arrayPag2[i].nomeMonstro;
      td_nivel.innerText = arrayPag2[i].nivelD;
      td_pv.innerText = arrayPag2[i].pv;
      td_tipo.innerText = arrayPag2[i].tipoC;
      img = document.createElement("IMG");
      img.src = arrayPag2[i].foto;
      img.style.width = "30px";
      img.style.height = "30px";
      document.getElementById('corpo').appendChild(img);
    }
  }

  adicionar(monstro) {
    this.arrayMonstro = [];
    this.arrayMonstro.push(monstro);
    this.id++;
  }

  lerDados() {
    let monstro = {}

    monstro.nomeMonstro = document.getElementById('nome').value;
    monstro.nivelD = document.getElementById('nd').value;
    monstro.tipoC = document.getElementById('tipoCriatura').value;
    monstro.pv = document.getElementById('pv').value;
    monstro.foto = document.getElementById('monsterFile').value;

    return monstro;
  }
}

var monstro = new Monstro();

