<?php

	$connect = mysql_connect('localhost','root','');
	$db = mysql_select_db('popmps');

	$msg = false;

	if(isset($_FILES['arquivo'])){

		$extensao = strtolower(substr($_FILES['name'], -4)); //pega extensão do arquivo
		$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
		$diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

		$sql_code = "INSERT INTO publicacoes (anexo) VALUES($novo_nome)";

		if($mysqli->query($sql_code))
			$msg = "Arquivo enviado com sucesso!";
		else
			$msg = "Fallha ao enviar arquivo.";
	}

	?>
	<h1> Upload de Arquivos </h1>
	<?php if($msg != false) echo "<p> $msg </p>"; ?>
	
	<!-- Campo: anexo --> 
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
				  <label class="col-md-4 control-label" for="arquivo">Anexo</label>
					<div class="col-md-4">
					  <input id="arquivo" required name="arquivo" class="input-file" required="true" type="file">
					    <span class="help-block">Limite de 2MB</span>
					  <input type="submit" value="Salvar">  
					</div>
				</div>
			</form>