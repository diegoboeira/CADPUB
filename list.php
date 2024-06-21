<?php
include('conn.php');

$link = mysql_connect('localhost','root','');

// Seleciona o Banco de dados através da conexão acima

$conexao = mysql_select_db('popmps',$link); if($conexao){

$sql = "SELECT numero,ano,titulo,categoria, data_public, anexo FROM publicacao";

$consulta = mysql_query($sql);

$cores = array("#CCCCCC","#FFFFFF");
$i = 2;

$pasta = '/menu/uploads/';
$arquivo = 'teste.pdf';//isso viria do BD



echo '<table  width="100%" border="0" cellspacing="0" cellpadding="5">';

echo '<tr>';

echo '<td>Número</td>';

echo '<td>Título</td>';

echo '<td>Categoria</td>';

echo '<td>Publicação</td>';

echo '<td>Arquivo</td>';

echo '</tr>';

// Armazena os dados da consulta em um array associativo

while($registro = mysql_fetch_assoc($consulta)){

$arquivo = $registro["anexo"];
$caminho = $pasta . $arquivo;
$cor = ($i%2 == 0) ? ' style="background: #ccc"' : '';

echo '<tr '.$cor.'>';

echo '<td>'.$registro["numero"].'/'.$registro["ano"].'</td>';

echo '<td>'.$registro["titulo"].'</td>';

echo '<td>'.$registro["categoria"].'</td>';

echo '<td>'.$registro["data_public"].'</td>';

echo '<td><a href="'.$caminho .'"><img src="img/adobe-pdf-icon.png" alt="Download do Arquivo" width="5%"></a></td>';

echo '</tr>';

$i++;

}

echo '</table>';

}

?>