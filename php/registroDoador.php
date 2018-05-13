<?php 

    require_once "./conectDB.php";

    $nome = $_POST['inputNome'];
    $telefone = $_POST['inputTelefone'];
    $endereco = $_POST['inputEndereco'];
    $frequencia = $_POST['inputFrequencia'];
    $ultimaDoacao = $_POST['inputUltimaDoacao'];
    $cadastrar = $_POST['cadastrar'];
    
    if (isset($cadastrar)) {
        $sql = "INSERT INTO `doadores` (`doadorId`, `nome`, `endereco`, `telefone`, `intervaloDoacoes`, `ultimaDoacao`) VALUES (NULL, '".$nome."', '".$endereco."', '".$telefone."', '".$frequencia."', '".$ultimaDoacao."');";
        if($conn->query($sql)){
            echo"<script language='javascript' type='text/javascript'>
            alert('Doador cadastrado com sucesso!');
            window.location.href='../doadores.php';
            </script>";
        }
    }
?>