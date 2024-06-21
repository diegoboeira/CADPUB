<?php
//conecta e seleciona banco

$link = mysqli_connect('localhost','root','','popmps');

// Recupera os dados dos campos
    $id = $_GET["id"];

// Confirma a exclusão da informação

// EXCLUI OS DADOS

$sql = "DELETE FROM publicacao WHERE ID = '$id'";
$consulta = mysqli_query($link, $sql);

// Se os dados forem inseridos com sucesso
            if ($sql){
                echo"<script language='javascript' type='text/javascript'>alert('Publicação exluída com sucesso!');window.location.href='lista.php'</script>";
            }

// Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "<br />";
            }
        }

?>