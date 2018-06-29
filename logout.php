<?php

  include ('Classes/Conexao.class.php');
  include ('Classes/UsuarioDAO.class.php');

  $usuario = new UsuarioDAO();

  $logout = $usuario->logout();

 ?>
