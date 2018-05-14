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
        <h2>Atualizar Doador</h2>
        <br>
        <form method="POST" action="./php/editarDoador.php">

            <?php
                if(!isset($_COOKIE["idDOador"])) {
                    echo "Dados expirados, tente novamente!";
                } else {
                    $sql = "SELECT * FROM doadores AS DR WHERE DR.doadorID=" .$_COOKIE["idDOador"]. "";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        
                        echo "
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                            <label for=\"inputNome\">Nome</label>
                            <input type=\"text\" class=\"form-control\" name=\"inputNome\" id=\"inputNome\" placeholder=\"Nome\" value=\"". $row["nome"]."\" required>
                            </div>
                            <div class=\"form-group col-md-6\">
                            <label for=\"inputTelefone\">Telefone</label>
                            <input type=\"text\" class=\"form-control\" name=\"inputTelefone\" id=\"inputTelefone\" placeholder=\"Telefone\" value=\"". $row["telefone"]."\" required>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputEndereco\">Endereco</label>
                            <input type=\"text\" class=\"form-control\" name=\"inputEndereco\" id=\"inputEndereco\" placeholder=\"1234 Main St\" value=\"". $row["endereco"]."\" required>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                            <label for=\"inputFrequencia\">Frequência doação</label>
                            <select name=\"inputFrequencia\" id=\"inputFrequencia\" class=\"form-control\">
                                <option selected>". $row["intervaloDoacoes"]."</option>
                                <option>Mensal</option>
                                <option>Quinzenal</option>
                                <option>Semanal</option>
                            </select>
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label for=\"inputUltimaDoacao\">Ultima doação</label>
                                <input type=\"text\" class=\"form-control\" name=\"inputUltimaDoacao\" id=\"inputUltimaDoacao\" placeholder=\"Data da ultima doação\" value=\"". $row["ultimaDoacao"]."\" required>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\" name=\"atualizar\" id=\"atualizar\" >Atualizar</button>
                        <button type=\"button\" class=\"btn btn-danger\">Deletar doador</button>";
                        
                        }
                    } else {
                        echo "<tr><td>Nenhuma família cadastrada!</td></tr>";
                    }
                    $conn->close();
                }
            ?>
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
