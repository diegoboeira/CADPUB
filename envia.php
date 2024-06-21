<?php

 /* Conecta e Seleciona o BD  */
include('conn.php');

/* Valores recebidos do formulário  */
$numero = $_POST['numero'];
$ano = $_POST['ano'];
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$data_public = $_POST['data'];
$resumo = $_POST['resumo'];
$arquivo = $_FILES['arquivo'];
$usuario = $_COOKIE['login'];
/* Upload do Arquivo para armazenamento no Server e Gravação das informações no banco  */

	

		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega extensão do arquivo
		$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
		$diretorio = "uploads/"; //define o diretorio para onde enviaremos o arquivo

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

		$query = "INSERT INTO publicacao (numero, ano, titulo, categoria, data_public, resumo, anexo, usuario) VALUES('$numero', '$ano', '$titulo', '$categoria', '$data_public', '$resumo', '$novo_nome', '$usuario')";
		$insert = mysqli_query($connect,$query);

		if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Publicação cadastrada com sucesso!');window.location.href='form.php'</script>";
        }else{
   			 die('Invalid query: ' . mysqli_error());
		}
          //echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse documento, por favor verifique as informação ou contate a TI');window.location.href='form.php'</script>";
	
	
?>