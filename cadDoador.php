<!DOCTYPE html>
<?php
  require_once "./php/conectDB.php";

  if(!isset($_COOKIE["idLOgado"])) {
    echo "<script language='javascript' type='text/javascript'>
      window.location.href='../index.php';
      alert('Você precisa estar logado para acessar essa página!');
  </script>";
  } else {

  }
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASA Itabira</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ASA Itabira</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./familias.php">Famílias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./doadores.php">Doadores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./recursos.php">Recursos</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-danger" id="quitQuit">Sair</button>
                <script>
                    document.getElementById('quitQuit').onclick = function() {
                    document.cookie = 'idLOgado' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                    window.open("./index.php","_self");
                    };
                </script>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="cadform">
        <h2>Cadastro de Doador</h2>
        <br>
        <form method="POST" action="./php/registroDoador.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" name="inputNome" id="inputNome" placeholder="Nome" required autofocus>
                </div>
                <div class="form-group col-md-6">
                <label for="inputTelefone">Telefone</label>
                <input type="text" class="form-control" name="inputTelefone" id="inputTelefone" placeholder="Telefone" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEndereco">Endereco</label>
                <input type="text" class="form-control" name="inputEndereco" id="inputEndereco" placeholder="1234 Main St" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFrequencia">Frequência doação</label>
                  <select name="inputFrequencia" id="inputFrequencia" class="form-control">
                      <option selected>Mensal</option>
                      <option>Quinzenal</option>
                      <option>Semanal</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputUltimaDoacao">Ultima doação</label>
                    <input type="text" class="form-control" name="inputUltimaDoacao" id="inputUltimaDoacao" placeholder="Data da ultima doação" required>
                </div>
            </div>
            <div class="form-group">
            </div>
            <button type="submit" class="btn btn-primary" name="cadastrar" id="cadastrar" >Cadastrar</button>
        </form>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/login.js"></script>

  </body>

</html>
