<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<script>
      function MyFunction()
      {
      if (window.confirm("Você realmente quer sair?")) 
      	{
		  window.open("login.html", "Obrigado pela visita!");
		};
      }
    </script>
</head>
<body>

	<!-- menu -->
			<div id="lateral">
			<div id="menu">
			<center><img src="img/male-user.png" alt="Identidade" height="42" width="42">   
			<!--<h3 class="link-titulo">cadPUB -->
			<div><h2 class="link-titulo"><?php $login_cookie = $_COOKIE['login']; echo"Bem-Vindo, $login_cookie"; ?></h2></div></center>
			  <ul class="box">					
			    <li><a href="home.php">Início</a></li>
			    <?php $logadmin_cookie = $_COOKIE['isadmin']; if($logadmin_cookie == 1 ){ echo "<li><a href='lista_user.php'>Usuários</a></li>"; } ?>
			    
			    <li><a href="form.php">Cadastro</a></li>
			    <li ><a href="lista.php">Reletórios</a></li>
			    <li ><a href="#" onclick="MyFunction();">Sair</a></li>
			  </ul>
			    
				<!-- mais seções -->

			</div> 	<!-- /#menu -->
			</div id="link"> <!-- vazio --> <div>
			</div> <!-- /#lateral -->
	<!-- fim do menu -->
	<center><img src="img/logo.png" alt="Identidade" style="opacity:0.3;"></center>   
			
</body>
</html>