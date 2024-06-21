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

      </div>  <!-- /#menu -->
      </div id="link"> <!-- vazio --> <div>
      </div> <!-- /#lateral -->
  <!-- fim do menu -->
  <SPAN style="position: absolute; top: 50px; left: 320px;">
  <div class="container">
  
    <?php

      $link = mysqli_connect('localhost','root','','popmps');

      // Seleciona o Banco de dados através da conexão acima

      $sql = "SELECT id,numero,ano,titulo,categoria, data_public, anexo FROM publicacao ORDER BY id";
      
      $consulta = mysqli_query($link, $sql);

      $cores = array("#CCCCCC","#FFFFFF");
      $i = 2;

      $pasta = '/cadpub/uploads/';
      $arquivo = 'teste.pdf';//isso viria do BD



      echo '<table>';

      echo '<tr>';

      echo '<td><b>ID</b></td>';

      echo '<td><b>Número</b></td>';

      echo '<td><b>Título</b></td>';

      echo '<td><b>Categoria</b></td>';

      echo '<td><b>Publicação</b></td>';

      echo '<td><b><Ações</b></td>';

      echo '</tr>';

      // Armazena os dados da consulta em um array associativo

      while($registro = mysqli_fetch_assoc($consulta)){  
        $arquivo = $registro["anexo"];
        $caminho = $pasta . $arquivo;
        $cor = ($i%2 == 0) ? ' style="background: #B0C4DE"' : '';

        echo '<tr'.$cor.'>';

        echo '<td>'.$registro["id"].'</td>';

        echo '<td>'.$registro["numero"].'/'.$registro["ano"].'</td>';

        echo '<td>'.$registro["titulo"].'</td>';

        echo '<td>'.$registro["categoria"].'</td>';

        echo '<td>'.$registro["data_public"].'</td>';

        echo '<td><a href="'.$caminho.'"><img src="img/adobe-pdf-icon.png" alt="Download do Arquivo" width="10%"></a>&nbsp;&nbsp;&nbsp;<a href="#" onclick="confirmDel();"><img src="img/del.png" alt="Deletar ítem" width="10%"></a>&nbsp;&nbsp;&nbsp;<a href="updateform.php?id='.$registro["id"].'"><img src="img/edit.png" alt="Atualizar ítem" width="10%"></a></td>';

        echo '</tr>';

        $i++;

      }

      echo '</table>';

      
    ?>

  </div>
  </span>
  <!-- Layout -->
  <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link type="text/css" href="css/normalize.min.css" />
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
  
  <!-- JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
  <!-- exclusao de registro -->
  <script type="text/javascript">
  function confirmDel() {
    let resposta = confirm("Deseja remover esse registro?");
 
     if (resposta == true) {
          id = window.prompt("Confirme o id da publicação");
          window.location.href = "deletar.php?id="+id;
     }
  }

  function confirmEdit(id) {
    let resposta = confirm("Deseja editar esse registro?");
 
     if (resposta == true) {
          window.location.href = "updateform.php?id="+id;
     }
  }
  </script>
</body>
</html>