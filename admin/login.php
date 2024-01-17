<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="">

        <title>Acesso ao sistema</title>

        <!-- Principal CSS do Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Estilos customizados para esse template -->
        <link href="../css/signin.css" rel="stylesheet">

    </head>
    <body class="bg-dark">

    <div class="container">

    <div class="text-center">
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <form class="form-signin" method="post">

                <img class="mb-4" src="img/logo.png" alt="" width="200" height="200">

                <h1 class="h3 mb-3 font-weight-normal text-white">Faça login</h1>

                <label for="inputEmail" class="sr-only mb-3" style="text-align: left">Endereço de email</label>
                <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Seu email" required autofocus
                    name="txtemail">

                <label for="inputPassword" class="sr-only mb-3">Senha</label>
                <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Senha" required
                    name="txtsenha">
                <input type="submit" class="btn btn-lg btn-primary" name="btnlogar" value="Login" />
                <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
            </form>
        </div>
    </div>
</div>



       
    </body>
</html>
<?php
if (filter_input(INPUT_POST, 'btnlogar')) {
    $email = filter_input(INPUT_POST, 'txtemail');
    $senha = filter_input(INPUT_POST, 'txtsenha');
    //gambiarra enquanto não tem BD
    //email: teste@teste.com
    //senha: 123
    if ($email == 'livia@gmail.com' && $senha == '308212') {
        session_start(); //espaço na memoria pro seu site
        //var de sessão
        $_SESSION['acesso'] = '07fa4740ef8c38e2521cd8f12314bacdaec38185';
        
        
        header("location:index.php");
    }
}
