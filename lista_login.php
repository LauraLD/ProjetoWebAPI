<?php

	include ('Classes/Conexao.class.php');

	$usuario = new Conexao();
	$sql = 'select * from usuario order by loginUsuario';
	$resultado = mysqli_query($usuario->getCon(), $sql);
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
			<h2>Usuários</h2>
		</div>
	</div>
 <div class="container" style="padding-top: 20px">
	 <?php
			 while($campos = mysqli_fetch_assoc($resultado)){

		 		echo '<a href="index.php?arquivo=lista_login.php">'.
		 				$campos['loginUsuario'].'</a><br>';
		 	}
		 	mysql_close($usuario->con);
		?>
 </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>
