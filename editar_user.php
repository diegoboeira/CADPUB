<?php

 /* Conecta e Seleciona o BD  */
include('conn.php');

/* Valores recebidos do formulário  */
$id = $_GET['id'];
$login = $_POST['login'];
$isadmin = $_POST['isadmin'];


		$query = "UPDATE usuarios SET login = '$login', isadmin = '$isadmin' WHERE ID = '$id'";
		$update = mysqli_query($connect,$query);

		if($update){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário alterado com sucesso!');window.location.href='lista_user.php'</script>";
        }else{
   			 die('Invalid query: ' . mysqli_error());
		}
          //echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse documento, por favor verifique as informação ou contate a TI');window.location.href='form.php'</script>";
	
	
?>