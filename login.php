<?php 
  include('conn.php');
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
    if (isset($entrar)) {
             
      $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
      $verific = mysqli_query($connect,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' AND isadmin = 1") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          setcookie("isadmin",0);
          header("Location:index.php");
        }

       if (mysqli_num_rows($verific)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          setcookie("isadmin",1);
          header("Location:index_admin.php");
        }
    }
?>