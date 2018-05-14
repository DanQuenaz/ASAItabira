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
            <h2>Famílias Cadastradas</h2>
            <br><br>
            <button type="button" class="btn btn-secondary" id="cadFamilia">Cadastrar família</button>
            <script>
                document.getElementById('cadFamilia').onclick = function() {
                window.open("./cadFamilia.php","_self")
              };
            </script>
            <button type="button" class="btn btn-secondary">Visualizar fila</button>
            <br><br>
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">Número de membros</th>
                <th scope="col">Cestas Recebidas</th>
                <th scope="col">Estado</th>
                <th scope="col">Membro da Igreja</th>
                <th scope="col">Prioridade</th>
                <th>##</th>
                </tr>
            </thead>
            <tbody>

              <?php
                $sql = "SELECT * FROM familias";
                $result = $conn->query($sql);
                $count = 0;

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    
                    echo " 
                    <tr>
                        <th scope=\"row\">". $row["representante"]. "</th>
                        <td>". $row["endereco"]. "</td>
                        <td>". $row["telefone"]. "</td>
                        <td>". $row["numeroMembros"]. "</td>
                        <td>". $row["cestasRecebidas"]. "</td>
                        <td>". $row["estado"]. "</td>
                        <td>". $row["membroIgreja"]. "</td>
                        <td>". $row["prioridade"]. "</td>
                        <td><button type=\"button\" class=\"btn btn-primary\" id=\"atlzFamilia".$count."\">Atualizar</button></td>
                      </tr>
                      <script>
                        document.getElementById('atlzFamilia".$count."').onclick = function() {
                          var cname = \"idFAmilia\";
                          var cvalue = ". $row["familiaId"]. ";
                          var d = new Date();
                          d.setTime(d.getTime() + (10*60*1000));
                          var expires = \"expires=\"+ d.toUTCString();
                          document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                          window.open(\"./editFamilia.php\",\"_self\");
                        };
                      </script>";
                      $count = $count+1;
                    
                  }
                } else {
                  echo "<tr><td>Nenhuma família cadastrada!</td></tr>";
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
