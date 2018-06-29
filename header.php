<header class="navbar navbar-light navbar-toggleable-md bd-navbar navbar-static-top" style="margin-bottom: 0">
  <nav class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Projeto NASA</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
         <li><a href="lista_login.php"><span class="glyphicon glyphicon-th-list"></span> Lista</a></li>
         <li><a href="usuario.php"><span class="glyphicon glyphicon-user"></span> Usuario</a></li>
         <li><a href="modelo.php"><span class="glyphicon glyphicon-link"></span> Conheça o universo</a></li>
       </ul>
       <ul class="nav navbar-nav pull-right">
          <li><a href>Bem vindo <strong><?php echo $_SESSION['login']; ?></strong>!</a></li>
         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
      </ul>

 </nav>
</header>
