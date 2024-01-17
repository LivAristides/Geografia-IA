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

<a href="index.php#contato" class="btn m-3 btn-outline-purple float-right section-padding devider justify-content-center" >Voltar</a>
 <!-- Hero -->
 <div id="hero" class="section-padding devider">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                    <img src="img/ia11.png" width="500px" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <center><h6 class="text-purple">CONTATO</h6></center>  
                    <center><h1 class="text-white">Contate-nos</h1></center>
                    <p class="landing-content-desc mt-3" style="text-align: center">Deseja falar algo referênte ao nosso 
                    trabalho, uma pergunta ou dúvida? Comente!</p>     
                          
                        </div>
            </div>
        </div>
    </div>
   
    <section id="section bg-dark">
  <div class="container">
    <div id="sobre" class="section-padding devider">
        <div class="container">
        <a href="listar.php" class="btn btn-outline-purple float-right justify-content-right" > <i class="bi bi-arrow-left"> lista </i></a> 
        </br>   
        </br>
        <div class="row gy-4 align-items-center">
            <form method="post">
            <div class="form-group mb-3">
    <label for="formGroupExampleInput" class="form-label">Nome</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="txtnome">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="txtemail">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtmensagem"></textarea>
</div>
  <button type="submit" class="btn btn-purple" name="btnenviar" value="Enviar">Enviar</button>
</form>
            </div>
        </div>
    </div>
</section>


<?php
if (filter_input(INPUT_POST, 'btnenviar')) {
    $nome = filter_input(INPUT_POST, 'txtnome');
    $email = filter_input(INPUT_POST, 'txtemail');
    $mensagem = filter_input(INPUT_POST, 'txtmensagem');
    include_once '../class/Contato.php';
    $cot = new Contato();
    /*
    $cat->setNome($nome);
    $cat->setDescricao($descricao);
    
    $cat->salvar();    
    */
$dados = array(
    'nome' => $nome, 
    'email' => $email, 
    'mensagem' => $mensagem, 
);
$cot->setDadosJson(json_encode($dados));
$msg = $cot->salvarFirebase() === true ? 'erro' : 'salvo';

    ?>
    <div class="container">
    <div class="alert alert-primary" role="alert">
        <?= $msg ?>
    </div>
</div>
    <?php
}
?>

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