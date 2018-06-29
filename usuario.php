<?php

  session_start();

?>
 <!DOCTYPE html>
 <html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Projeto NASA</title>

 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bd-docs">
  <?php include('header.php') ?>
  <div class="bd-pageheader bg-primary">
    <div class="container">
      <h2>Dados do Usuário Logado</h2>
    </div>
  </div>
  <div class="container" style="padding-top: 20px">
    <p>
      <?php echo "Usuário: ".$_SESSION['login']?>
    </p>
    <p>
      <?php echo "Senha: ".$_SESSION['senha']; ?>
  </p>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>
