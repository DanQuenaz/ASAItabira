<?php 

    require_once "./conectDB.php";

    $representante = $_POST['inputRepresentante'];
    $telefone = $_POST['inputTelefone'];
    $endereco = $_POST['inputEndereco'];
    $estado = $_POST['inputEstado'];
    $nmembros = $_POST['inputNMembros'];
    $membro = $_POST['inputMembro'];
    $prioridade = $_POST['inputPrioridade'];
    $cestas = $_POST['inputCestas'];
    $cadastrar = $_POST['cadastrar'];
    
    if (isset($cadastrar)) {
        $sql = "INSERT INTO `familias` (`familiaId`, `representante`, `numeroMembros`, `endereco`, `telefone`, `estado`, `cestasRecebidas`, `membroIgreja`, `prioridade`) VALUES (NULL, '".$representante."', '".$nmembros."', '".$endereco."', '".$telefone."', '".$estado."', '".$cestas."', '".$membro."', '".$prioridade."');";
        if($conn->query($sql)){
            echo"<script language='javascript' type='text/javascript'>
            alert('Família cadastrada com sucesso!');
            window.location.href='../familias.php';
            </script>";
        }
    }
?>