<?php
/* Conecta e Seleciona o BD  */
include('conn.php');

if (isset($_POST['submit'])){ 
      // guarda os dados da pesquisa em variaveis
      $numero=NULL;
      $categoria = $_POST['categoria'];
      $ano = $_POST['ano'];
      $numero = $_POST['numero'];
      $titulo = $_POST['titulo'];
      $sql=NULL;

      // cria a sql conforme itens categoria e ano
      
      if ($numero==NULL AND $titulo==NULL){
            if ($categoria=='*' AND $ano=='*'){
            $sql = "SELECT id,numero,ano,titulo,categoria, data_public, anexo FROM publicacao ORDER BY id";
            }
            if ($categoria=='*' AND $ano!='*'){
            $sql = "SELECT numero, ano, titulo, categoria, data_public, anexo FROM publicacao WHERE ano=$ano ORDER BY ano DESC";
            }
            if ($categoria!='*' AND $ano=='*'){
            $sql = "SELECT numero, ano, titulo, categoria, data_public, anexo FROM publicacao WHERE categoria='$categoria' ORDER BY categoria DESC";
            }
            if ($categoria!='*' AND $ano!='*'){
            $sql = "SELECT numero, ano, titulo, categoria, data_public, anexo FROM publicacao WHERE categoria='$categoria' AND ano=$ano ORDER BY categoria DESC";
            }
      // cria sql conforme item numero
      }elseif($numero!=NULL) {
            $sql = "SELECT numero, ano, titulo, categoria, data_public, anexo FROM publicacao WHERE numero='$numero' ORDER BY numero DESC";
      }else{
            $sql = "SELECT numero, ano, titulo, categoria, data_public, anexo FROM publicacao WHERE titulo LIKE '%$titulo%' ORDER BY titulo DESC";     
      }

      

      $consulta = mysqli_query($connect,$sql);
      $cores = array("#CCCCCC","#FFFFFF");
      $i = 2;

      $pasta = '/cadpub/uploads/';
      $arquivo = '//teste.pdf';//isso viria do BD

                        echo '<table  width="100%" border="0" cellspacing="0" cellpadding="5">';
                        
                        echo '<tr>';

                        echo '<td>Número</td>';

                        echo '<td>Título</td>';

                        echo '<td>Categoria</td>';

                        echo '<td>Publicação</td>';

                        echo '<td>Arquivo</td>';

                        echo '</tr>';

                  // Armazena os dados da consulta em um array associativo

                  while($registro = mysqli_fetch_assoc($consulta)){

                        $arquivo = $registro["anexo"];
                        $caminho = $pasta . $arquivo;
                        $cor = ($i%2 == 0) ? ' style="background: #ccc"' : '';

                        echo '<tr '.$cor.'>';

                        echo '<td>'.$registro["numero"].'/'.$registro["ano"].'</td>';

                        echo '<td>'.$registro["titulo"].'</td>';

                        echo '<td>'.$registro["categoria"].'</td>';

                        echo '<td>'.$registro["data_public"].'</td>';

                        echo '<td><a href="'.$caminho .'"><img src="img/file-pdf.png" alt="Download do Arquivo" width="15%"></a></td>';

                        echo '</tr>';

                        $i++;      
                  }

                  echo '</table>';
}else{
      echo '<h2><span style="color: #535151;">Últimas publica&ccedil;&otilde;es</span></h2><br><br>';
      $sql = "SELECT id,numero,ano,titulo,categoria, data_public, anexo FROM publicacao ORDER BY id";

      $consulta = mysqli_query($connect,$sql);
      $cores = array("#CCCCCC","#FFFFFF");
      $i = 2;

      $pasta = '/cadpub/uploads/';
      $arquivo = '//teste.pdf';//isso viria do BD

                        echo '<table  width="100%" border="0" cellspacing="0" cellpadding="5">';
                        
                        echo '<tr>';

                        echo '<td>Número</td>';

                        echo '<td>Título</td>';

                        echo '<td>Categoria</td>';

                        echo '<td>Publicação</td>';

                        echo '<td>Arquivo</td>';

                        echo '</tr>';

                  // Armazena os dados da consulta em um array associativo

                  while($registro = mysqli_fetch_assoc($consulta) AND ($i<11)){

                        $arquivo = $registro["anexo"];
                        $caminho = $pasta . $arquivo;
                        $cor = ($i%2 == 0) ? ' style="background: #ccc"' : '';

                        echo '<tr '.$cor.'>';

                        echo '<td>'.$registro["numero"].'/'.$registro["ano"].'</td>';

                        echo '<td>'.$registro["titulo"].'</td>';

                        echo '<td>'.$registro["categoria"].'</td>';

                        echo '<td>'.$registro["data_public"].'</td>';

                        echo '<td><a href="'.$caminho .'"><img src="img/file-pdf.png" alt="Download do Arquivo" width="15%"></a></td>';

                        echo '</tr>';

                        $i++;      
                  }

                  echo '</table>';
            }
?>