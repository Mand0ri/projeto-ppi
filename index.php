<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Código im Kafig</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
	 crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

	<header class="d-flex">
		<img src="img/logo.png" alt="logo" width=100 height=120 id="logo">
		<h1>Código im Kafig</h1>
		<h2>D&D 5e</h2>
	</header>
  <?php
    include "inc/nav.php";
    ?>
  <main class="main-tela-inicial">
    <form class="inicio">
        <div class="secao">
            <h3>Praticidade</h3>
            <p class="secao-descricao">Faça o catálogo dos monstros da sua mesa de D&D de forma fácil e prática e torne sua experiência e a dos seus jogadores muito melhor!</p>
            <a class="btn bot1" id="botaoComece" href="registro.php">Comece agora</a>
        </div>
        
        <div class="carousel-container">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
              </ol>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/Beholder.jpg" class="imagem" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Beholder</h5>                
                  </div>
                </div>              
                <div class="carousel-item">
                  <img src="img/Tarrasque.jpg" class="imagem" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Tarrasque</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/mindflayer.jpg" class="imagem" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Illithid, O Devorador de Mentes</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/Aboleth.jpg" class="imagem" >
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Aboleth</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/Mossdog.jpg" class="imagem" >
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Mossdog</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/Mimic.jpg" class="imagem" >
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Mímico</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/Displacer Beast 2.jpg" class="imagem" >
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Pantera Deslocadora</h5>
                  </div>
                </div>
              </div>
            

              <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </button>
            </div>
          </div>
    </form>
  </main>

  <?php
    include "inc/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	  <link href="/css/css_for_all.css"  rel="stylesheet" type="text/css">	  
	  <script src="monstro.js">	</script>
	  <script src="script.js"></script>  
    <script src="modal.js"></script>  
  </body>
</html>