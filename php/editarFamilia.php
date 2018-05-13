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
    $atualizar = $_POST['atualizar'];
    
    if (isset($atualizar)) {

        $sql = "UPDATE familias
        SET representante = '".$representante."', numeroMembros= '".$nmembros."', endereco= '".$endereco."', telefone= '".$telefone."', estado= '".$estado."', cestasRecebidas= '".$cestas."', membroIgreja= '".$membro."', prioridade= '".$prioridade."'
        WHERE familiaId = " .$_COOKIE["idFAmilia"]. ";";
        if($conn->query($sql)){
            echo"<script language='javascript' type='text/javascript'>
            alert('Família atualizada com sucesso!');
            window.location.href='../familias.php';
            </script>";
        }
    }
?>