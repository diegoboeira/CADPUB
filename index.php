<?php
include('conn.php');

  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
    	header("Location: home.php");
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>