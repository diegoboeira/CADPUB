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
   
    <form class="form-horizontal" method="POST" action="editar_user.php?id=<?php $id = $_GET['id']; echo $id; ?>" enctype="multipart/form-data">
      <fieldset>
       
       <?php
       
         $link = mysqli_connect('localhost','root','','popmps');

        // Seleciona o Banco de dados através da conexão acima

        $id = $_GET["id"];

        $sql = "SELECT id,login,isadmin FROM usuarios WHERE ID = $id";
        $consulta = mysqli_query($link, $sql);
        $registro = mysqli_fetch_assoc($consulta);

        ?>

        <!-- Título do formulário -->
        <legend>Editar Usuário</legend>

        <!-- Campo: Login-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="login"><font size="2">Login</font></label>  
          <div class="col-md-4">
            <input id="login" name="login" placeholder='<?php echo $registro["login"] ?>' class="form-control input-md" type="text" required>
          </div>
        </div>
      
                     
        <!-- Campo: Nivel de acesso -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="isadmin"><font size="2">Nível de Acesso(Selecione novamente)</font></label>
          <div class="col-md-4">                     
            <select class="form-control input-md" name="isadmin" required="true" id="isadmin">
              <option value="1">Administrador</option>
              <option value="0">Editor de Publicações</option>
            </select>
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