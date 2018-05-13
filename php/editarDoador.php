<?php 

    require_once "./conectDB.php";

    $nome = $_POST['inputNome'];
    $telefone = $_POST['inputTelefone'];
    $endereco = $_POST['inputEndereco'];
    $frequencia = $_POST['inputFrequencia'];
    $ultimaDoacao = $_POST['inputUltimaDoacao'];
    $atualizar = $_POST['atualizar'];
    
    if (isset($atualizar)) {

        $sql = "UPDATE doadores
        SET nome = '".$nome."', endereco= '".$endereco."', telefone= '".$telefone."', intervaloDoacoes= '".$frequencia."', ultimaDoacao= '".$ultimaDoacao."'
        WHERE doadorId = " .$_COOKIE["idDOador"]. ";";
        if($conn->query($sql)){
            echo"<script language='javascript' type='text/javascript'>
            alert('Doador atualizado com sucesso!');
            window.location.href='../doadores.php';
            </script>";
        }
    }
?>