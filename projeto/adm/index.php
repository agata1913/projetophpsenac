<?php
  session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Entrar</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="valida.php" method="post">

  <h1 class="h3 mb-3 font-weight-normal">Área Restrita</h1>
  <label for="inputEmail" class="sr-only">Login</label>
  <input type="email" name="txt_usuario" id="inputEmail" class="form-control" placeholder="E-mail">
  <label for="inputPassword" class="sr-only">Senha</label>
  <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="Senha">
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Esqueceu a senha? </br>
      <a href="cadusuarios.php">Não tem cadastro?</a>
    </label>
  </div>
  <button class="btn btn-lg btn-danger btn-block" type="submit">Entrar</button>
<p class="text-center text-danger">
<?php
    if(isset($_SESSION['loginErro'])) {
      echo $_SESSION['loginErro'];
      unset ($_SESSION['loginErro']);
    }
?>
</p>
<p class="text-center text-success">
<?php
    if(isset($_SESSION['loginDeslogado'])) {
      echo $_SESSION['loginDeslogado'];
      unset ($_SESSION['loginDeslogado']);
    }
?>
</p>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>
</body>
</html>
