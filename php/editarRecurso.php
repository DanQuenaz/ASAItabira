<?php 

    require_once "./conectDB.php";

    $nome = $_POST['inputItem'];
    $quantidade = $_POST['inputQuantidade'];
    $atualizar = $_POST['atualizar'];
    
    if (isset($atualizar)) {

        $sql = "UPDATE recursos
        SET nome = '".$nome."', quantidade= '".$quantidade."'
        WHERE recursoId = " .$_COOKIE["idREcurso"]. ";";
        if($conn->query($sql)){
            echo"<script language='javascript' type='text/javascript'>
            alert('Recurso atualizado com sucesso!');
            window.location.href='../recursos.php';
            </script>";
        }
    }
?>