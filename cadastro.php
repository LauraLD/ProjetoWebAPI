<?php

  if(isset($_POST['cadastrar'])) {
    include ('Classes/Conexao.class.php');
    include ('Classes/UsuarioDAO.class.php');

    $cadastrar = new UsuarioDAO();

    $login = trim(strip_tags($_POST['login']));
    $senha = trim(strip_tags($_POST['senha']));
    $rep_senha = trim(strip_tags($_POST['rep_senha']));

    if($senha === $rep_senha) {
      $consulta = $cadastrar->unico($login);

      if($consulta == false) {
        header('location:cadastro.php?repetido=senha');

      } else {
        $insere = $cadastrar->cadastra($login,$senha);

        if($insere == true) {
          header('location:cadastro.php?success=cadastrado');
        }
      }

    } else {
      header('location:cadastro.php?erro=senha');
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
        echo '<div class="alert alert-danger">As senhas não correspondem!</div>';
      }

      if(isset($_GET['repetido'])) {
        echo '<div class="alert alert-danger">Este Login já existe!</div>';
      }

      if(isset($_GET['success'])) {
        echo '<div class="alert alert-success">Usuario cadastrado!</div>';
      }

    ?>

    <h2>Cadastro</h2>
    <hr>
    <form action="#" method="post">

      <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" name="login" required autofocus>
      </div>

      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha" required>
      </div>

      <div class="form-group">
        <label for="rep_senha">Repita a Senha:</label>
        <input type="password" class="form-control" id="rep_senha" name="rep_senha" required>
      </div>
      <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
      <a href="index.php" class="btn btn-primary"><i class="icon-user icon-white"></i>Voltar</a>
    </form>
  </hr>
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
