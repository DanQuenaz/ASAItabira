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

    <br><br>
    <div class="tables">
        <div class="row">
        <div class="col-lg-12 mx-auto">
            <h2>Doadores Cadastrados</h2>
            <br><br>
            <button type="button" class="btn btn-secondary" id="cadDoador">Cadastrar doador</button>
            <script>
              document.getElementById('cadDoador').onclick = function() {
                window.open("./cadDoador.php","_self")
              };
            </script>
            <br><br>
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">Frequência doação</th>
                <th scope="col">Ultima doação</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
              <?php
                $sql = "SELECT * FROM doadores";
                $result = $conn->query($sql);
                $count = 0;
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    
                    echo " 
                    <tr>
                        <th scope=\"row\">". $row["nome"]. "</th>
                        <td>". $row["endereco"]. "</td>
                        <td>". $row["telefone"]. "</td>
                        <td>". $row["intervaloDoacoes"]. "</td>
                        <td>". $row["ultimaDoacao"]. "</td>
                        <td><button type=\"button\" class=\"btn btn-primary\" id=\"atlzDoador".$count."\">Atualizar</button></td>
                      </tr>
                      <script>
                        document.getElementById('atlzDoador".$count."').onclick = function() {
                          var cname = \"idDOador\";
                          var cvalue = ". $row["doadorId"]. ";
                          var d = new Date();
                          d.setTime(d.getTime() + (10*60*1000));
                          var expires = \"expires=\"+ d.toUTCString();
                          document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                          window.open(\"./editDoador.php\",\"_self\");
                        };
                      </script>";
                      $count = $count+1;;
                    
                  }
                } else {
                  echo "<tr><td>Nenhum doador cadastrado!</td></tr>";
                }
                $conn->close();
              ?>
                
            </tbody>
            </table>
        </div>
        </div>
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
