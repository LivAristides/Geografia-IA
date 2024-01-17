<?php
//trava de login
date_default_timezone_set('America/Sao_Paulo');
(!isset($_SESSION) ? session_start() : "");

if ($_SESSION['acesso'] != '07fa4740ef8c38e2521cd8f12314bacdaec38185') {
    header('location:logout.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Mensagens automaticas</title>
  </head>
  <body class="bg-dark">

  <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-dark">
  <div class="container">
    <a class="navbar-brand text-white" href="index.php">Mensagens Automáticas</a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false " aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-white" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tipos.php">Tipos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="ia.php">IA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="salvar.php">Contato</a>
        </li>
        <li class="nav-item">
                <a class="nav-link float-right" href="logout.php">
                <i class='bx bx-log-out text-white'></i>
                </a>
</li>
      </ul>
    </div>
  </div>
</nav>

<div class="hero vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
               <h1 class="display-4 text-white">Mensagens Automáticas</h1>
               <p class="text-white my-4" style="font-size: 20px">Mensagens automáticas se referem a mensagens que 
               são geradas e enviadas automaticamente sem a intervenção direta 
               de um ser humano. Elas são comumente usadas em uma variedade de contextos 
               para facilitar a comunicação eficiente e fornecer respostas rápidas 
               e consistentes.
</p>
                <a href="#sobre" class="btn me-3 btn-purple text-purple">Sobre</a>
                <a href="salvar.php" class="btn btn-purple">Contato</a>
            </div>
        </div>
    </div>
</div>
    
<section id="section bg-dark">
  <div class="container">
    <div id="sobre" class="section-padding devider">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                    <img src="img/ia2.png" width="500px" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <center><h6 class="text-purple">SOBRE</h6></center>  
                    <center><h1 class="text-white">Sobre Mensagens Automáticas</h1></center>
                    <p class="landing-content-desc mt-3" style=" text-align: center">Mensagens automáticas, também conhecidas como mensagens
                     automatizadas ou chatbots, são programas de computador ou sistemas de inteligência 
                     artificial (IA) projetados para interagir com seres humanos ou outros 
                     sistemas automaticamente, sem a necessidade de intervenção humana direta.</p>     
                          <center> <a href="sobre.php" class="btn me-3 btn-purple text-purple">Ver Mais</a></center>
                        </div>
            </div>
        </div>
    </div>
</section>

<section id="section" class="section-padding devider border-top">
  <div class="container">
    <div id="hero" class="section-padding devider">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6" id="tipo">
                    <center><h6 class="text-purple">TIPOS</h6></center>  
                    <center><h1 class="text-white">Tipos de Mensagens Automáticas</h1></center>
                    <p class="landing-content-desc mt-3" style="text-align: center">Existem vários tipos de mensagens automáticas,
                     cada uma com um propósito específico e adequada para diferentes contextos e necessidades.
                      Aqui estão alguns tipos comuns de mensagens automáticas:</p>
                          <center> <a href="tipos.php" class="btn me-3 btn-purple text-purple">Ver Mais</a></center>     
                </div>
                <div class="col-lg-5">
                    <img src="img/ia3.png" width="500px" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
  
<section id="section" class="section-padding devider border-top">
  <div class="container">
    <div id="hero" class="section-padding devider">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5" id="ia">
                    <img src="img/ia4.png" width="500px" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <center><h6 class="text-purple">IA</h6></center>  
                    <center><h1 class="text-white">Inteligencia Artificial</h1></center>
                    <p class="landing-content-desc mt-3" style="text-align: center">A inteligência artificial (IA) é um campo da
                     ciência da computação que se concentra no desenvolvimento de sistemas e algoritmos capazes
                      de realizar tarefas que normalmente exigiriam inteligência humana. 
                      A IA busca criar máquinas que possam aprender, raciocinar, tomar decisões e resolver 
                      problemas de forma semelhante ou até mesmo superior à capacidade humana.</p> 
                          <center> <a href="ia.php" class="btn me-3 btn-purple text-purple">Ver Mais</a></center>    
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section" class="section-padding devider border-top">
  <div class="container">
    <div id="contato" class="section-padding devider">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6" id="contato">
                    <center><h6 class="text-purple">CONTATO</h6></center>  
                    <center><h1 class="text-white">Contate-nos</h1></center>
                    <p class="landing-content-desc mt-3" style="text-align: center">Deseja falar algo referênte ao nosso 
                    trabalho, uma pergunta ou dúvida? Comente!</p>
                          <center> <a href="salvar.php" class="btn me-3 btn-purple text-purple">Ver Mais</a></center>     
                </div>
                <div class="col-lg-5">
                    <img src="img/ia6.png" width="500px" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>
      <p class="text-muted">&copy; 2023</p>
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sobre</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tipos</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">IA</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contato</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sobre</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tipos</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">IA</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contato</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sobre</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tipos</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">IA</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contato</a></li>
      </ul>
    </div>

    
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <script src="../js/script.js" type="text/javascript"></script>

        <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

<script src="../js/script.js" type="text/javascript"></script>
    
  </body>
</html>