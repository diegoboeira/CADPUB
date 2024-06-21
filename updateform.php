<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title></title>
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

      </div>  <!-- /#menu -->
      </div id="link"> <!-- vazio --> <div>
      </div> <!-- /#lateral -->
  <!-- fim do menu -->
  <SPAN style="position: absolute; top: 100px; left: 320px; width: 900px;">
  <div class="container col-md-8">
  <br>
   
    <form class="form-horizontal" method="POST" action="editar_public.php" enctype="multipart/form-data">
      <fieldset>
       
       <?php
       
         $link = mysqli_connect('localhost','root','','popmps');

        // Seleciona o Banco de dados através da conexão acima

        $id = $_GET["id"];

        $sql = "SELECT id,numero,ano,titulo,categoria,data_public,resumo,usuario FROM publicacao WHERE ID = $id";
        $consulta = mysqli_query($link, $sql);
        $registro = mysqli_fetch_assoc($consulta);

        ?>

        <!-- Título do formulário -->
        <legend>Atualização de Publicação</legend>

        <!-- Campo: Autor disable-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="numero"><font size="2">Publicado por</font></label>  
          <div class="col-md-4">
        <input id="usuario" name="usuario" class="form-control input-md" type="text" value="<?php echo $registro["usuario"]; ?>" readonly>
         </div>
        </div>


        <!-- Campo: ID disable-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="numero"><font size="2">ID</font></label>  
          <div class="col-md-4">
        <input id="id" name="id" class="form-control input-md" type="number" value="<?php echo $registro["id"]; ?>" readonly>
         </div>
        </div>

        <!-- Campo: Numero-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="numero"><font size="2">Número</font></label>  
          <div class="col-md-4">
            <input id="numero" name="numero" value='<?php echo $registro["numero"]; ?>' class="form-control input-md" type="number">
          </div>
        </div>
      
        <!-- Campo: Ano-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="numero"><font size="2">Ano</font></label>
          <div class="col-md-4">
            <input id="ano" name="ano" value='<?php echo $registro["ano"]; ?>' class="form-control input-md" type="number">
          </div>
        </div>
        
        <!-- Campo: Título -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="titulo"><font size="2">Título</font></label>  
          <div class="col-md-4">
            <input id="titulo" name="titulo" value='<?php echo $registro["titulo"]; ?>' class="form-control input-md" type="text">
          </div>
        </div>
        
        <!-- Campo: Categoria -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="categoria"><font size="2">Categoria (Atual: <?php echo $registro["categoria"]; ?>)</font></label>
          <div class="col-md-4">                     
            <select class="form-control input-md" name="categoria" required="true" id="categoria">
              <option value="editais">Selecionar</option>
              <option value="atas">Atas</option>
              <option value="atascomite">Atas do Comitê</option>
              <option value="atasconselho">Atas do Conselho</option> 
              <option value="decretos">Decretos</option>
              <option value="portarias">Portarias</option>
              <option value="editais">Editais</option>
              <option value="concursos">Concursos</option>
              <option value="convocacao">Convocação</option>
              <option value="proseletivo">Processos Seletivos</option>
            </select>
          </div>
        </div>

        <div class="col-md-10"></div>

        <!-- Campo: Data -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="data"><font size="2">Data de Publicação</font></label>  
          <div class="col-md-4">
            <input id="replyto" name="data" class="form-control input-md" value='<?php echo $registro["data_public"]; ?>' type="date">
          </div>
        </div>
        
        <!-- Campo: Resumo -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="resumo"><font size="2">Ementa</font></label>  
          <div class="col-md-4">
            <textarea id="assunto" name="resumo" value='' class="form-control input-md"><?php echo $registro["resumo"]; ?></textarea>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for=""><font size="2">Anexo não é editável, caso necessite favor excluir publicação e refaze-lá</font></label>  
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