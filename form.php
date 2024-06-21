<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
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
	<SPAN style="position: absolute; top: 100px; left: 320px; width: 900px;">
	<div class="container col-md-8">
	<br>
   
		<form class="form-horizontal" method="POST" action="envia.php" enctype="multipart/form-data">
		  <fieldset>
 
			<!-- Título do formulário -->
			<legend>Cadastro de Publicações Oficiais</legend>
			<!-- Campo: Numero-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="numero"><font size="2">Número</font></label>  
				<div class="col-md-4">
				  <input id="numero" name="numero" placeholder="nº" class="form-control input-md" required="true" type="number">
				</div>
			</div>

			<!-- Campo: Ano-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="numero"><font size="2">Ano</font></label>
				<div class="col-md-4">
					<input id="ano" name="ano" placeholder="Ano" class="form-control input-md" required="true" type="number">
				</div>
			</div>
 
			<!-- Campo: Título -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="titulo"><font size="2">Título</font></label>  
				<div class="col-md-4">
				  <input id="titulo" name="titulo" placeholder="Informe o Título do documento" class="form-control input-md" required="" type="text">
				</div>
			</div>

			<!-- Campo: Categoria -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="categoria"><font size="2">Categoria</font></label>
				<div class="col-md-4">                     
				  	<select class="form-control input-md" name="categoria" required="true" id="categoria">
				  	  <option value="atas">Atas</option>
				  	  <option value="atascomite">Atas do Comitê</option>
                      <option value="atasconselho">Atas do Conselho</option>>	
					  <option value="decretos">Decretos</option>
					  <option value="portarias">Portarias</option>
					  <option value="editais">Editais</option>
					  <option value="concursos">Concursos</option>
					  <option value="convocacao">Convocação</option>
					  <option value="proseletivo">Processos Seletivos</option>
					</select>
				</div>
			</div>
			
			<!-- Campo: Data -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="data"><font size="2">Data de Publicação</font></label>  
				<div class="col-md-4">
				  <input id="replyto" name="data" class="form-control input-md" required="true" type="date">
				</div>
			</div>
			
			<!-- Campo: Resumo -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="resumo"><font size="2">Ementa</font></label>  
				<div class="col-md-4">
				  <textarea id="assunto" name="resumo" placeholder="Insira um resumo breve" class="form-control input-md" required="true"></textarea>
				</div>
			</div>
			
			<!-- Campo: anexo --> 
				<div class="form-group">
				  <label class="col-md-4 control-label" for="arquivo"><font size="2">Anexo</font></label>
					<div class="col-md-4">
					  <input id="arquivo" required name="arquivo" class="input-file" required="true" type="file">
					    <span class="help-block"><font size="3">Limite de 2MB</font></span>  
					</div>
				</div>

 
			
			<!-- Botão Enviar -->
			<center>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
				<div class="col-md-4">
				  <button type="submit" class="btn btn-default">Enviar</button>
				</div>
			</div>
 
		  </fieldset>
		</form>
	</div>
	</span>
	<!-- Layout -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link type="text/css" href="css/normalize.min.css" />
	
	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>

</body>
</html>