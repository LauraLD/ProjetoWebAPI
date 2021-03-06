<?php

  if($_POST) {
    include ('Classes/Conexao.class.php');
    include ('Classes/UsuarioDAO.class.php');

    $usuario = new UsuarioDAO();

    $login = addslashes($_POST['login']);
    $senha = addslashes($_POST['senha']);

    $user = $usuario->login($login, $senha);

    if($user == true) {
      session_start();
      $_SESSION['login'] = $login;
      $_SESSION['senha'] = $senha;
      header('location: admin.php');
    } else {
      header('location:index.php?erro=senha');
    }

  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Projeto NASA</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <?php include('header.php') ?>
  <div class="bd-pageheader bg-primary">

  <div class="container">

  <?php

    if(isset($_GET['erro'])) {
      echo '<div class="alert alert-danger">Dados de login incorretos</div>';
    }

    if(isset($_GET['success'])) {
      echo '<div class="alert alert-success">Logout efetuado com sucesso</div>';
    }

  ?>
  <h2>Login</h2>
  <hr>
    <form action="#" method="post">

      <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" name="login">
      </div>

      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha">
      </div>

      <input type="submit" class="btn btn-primary" name="logar" value="Logar">
      <a href="cadastro.php" class="btn btn-primary"><i class="icon-user icon-white"></i>Cadastre-se</a>

    </form>

    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
      setTimeout(function() {
        $('.alert').fadeOut();
      }, 4000);
    </script>
   </body>

   </html>
