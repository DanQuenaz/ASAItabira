<?php 

    require_once "./conectDB.php";

    $nome = $_POST['inputItem'];
    $quantidade = $_POST['inputQuantidade'];
    $cadastrar = $_POST['cadastrar'];
    
    if (isset($cadastrar)) {
        $sql = "INSERT INTO `recursos` (`recursoId`, `nome`, `quantidade`) VALUES (NULL, '".$nome."', '".$quantidade."');";
        if($conn->query($sql)){
            echo"<script language='javascript' type='text/javascript'>
            alert('Recurso cadastrado com sucesso!');
            window.location.href='../recursos.php';
            </script>";
        }
    }
?>