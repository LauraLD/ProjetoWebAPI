<?php

  session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <title>Projeto NASA</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include('header.php') ?>
  <div class="bd-pageheader bg-primary">
    <div class="container">

  <script language="JavaScript" src="sat.js"></script>
  <img id="apod_img_id" width="250px"/>

  <iframe id="apod_vid_id" type="text/html" width="640" height="385" frameborder="0"></iframe>
  <p id="copyright"></p>

  <h3 id="apod_title"></h3>
  <p id="apod_explaination"></p>
  <br/>
  <p>
    <a href="sat.php" class="btn btn-default"><i class="icon-user icon-white"></i>Planetário</a>
  </p>
</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
