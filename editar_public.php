<?php
 /* Conecta e Seleciona o BD  */
include('conn.php');

/* Valores recebidos do formulário  */
$id = $_POST['id'];
$numero = $_POST['numero'];
$ano = $_POST['ano'];
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$data_public = $_POST['data'];
$resumo = $_POST['resumo'];

		$query = "UPDATE publicacao SET numero = '$numero', ano = '$ano', titulo = '$titulo', categoria = '$categoria', data_public = '$data_public', resumo = '$resumo' WHERE ID = '$id'";
		$insert = mysqli_query($connect,$query);

		if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Publicação alterada com sucesso!');window.location.href='lista.php'</script>";
        }else{
   			 die('Invalid query: ' . mysqli_error());
		}
          //echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse documento, por favor verifique as informação ou contate a TI');window.location.href='form.php'</script>";	
	
?>