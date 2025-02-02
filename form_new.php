<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>CADPUB - Home</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Início</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php $login_cookie = $_COOKIE['login']; echo"Olá, $login_cookie"; ?></span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@example.com</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Ínicio</a>
          <a class="mdl-navigation__link" href="form_new.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Cadastro</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Relatórios</a>
          </div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Ajuda</span></a>
        </nav>
      </div>
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--4dp mdl-cell--12-col mdl-grid">
      
              <form class="form-horizontal" method="POST" action="envia.php" enctype="multipart/form-data">
            <fieldset>
       
            <!-- Título do formulário -->
            <legend>Cadastro de Publicações Oficiais | versão 1.0 
              <div align="right"> <?php $login_cookie = $_COOKIE['login']; echo"Bem-Vindo, $login_cookie"; ?> </div>
            </legend>
            <!-- Campo: Numero-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="numero">Número</label>  
              <div class="col-md-4">
                <input id="numero" name="numero" placeholder="nº" class="form-control input-md" required="true" type="number">
              </div>
            </div>

            <!-- Campo: Ano-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="numero">Ano</label>
              <div class="col-md-4">
                <input id="ano" name="ano" placeholder="Ano" class="form-control input-md" required="true" type="number">
              </div>
            </div>
       
            <!-- Campo: Título -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="titulo">Título</label>  
              <div class="col-md-4">
                <input id="titulo" name="titulo" placeholder="Informe o Título do documento" class="form-control input-md" required="" type="text">
              </div>
            </div>

            <!-- Campo: Categoria -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="categoria">Categoria</label>
              <div class="col-md-4">                     
                  <select class="form-control input-md" name="categoria" required="true" id="categoria">
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
              <label class="col-md-4 control-label" for="data">Data de Publicação</label>  
              <div class="col-md-4">
                <input id="replyto" name="data" class="form-control input-md" required="true" type="date">
              </div>
            </div>
            
            <!-- Campo: Resumo -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="resumo">Ementa</label>  
              <div class="col-md-4">
                <textarea id="assunto" name="resumo" placeholder="Insira um resumo breve" class="form-control input-md" required="true"></textarea>
              </div>
            </div>
            
            <!-- Campo: anexo --> 
              <div class="form-group">
                <label class="col-md-4 control-label" for="arquivo">Anexo</label>
                <div class="col-md-4">
                  <input id="arquivo" required name="arquivo" class="input-file" required="true" type="file">
                    <span class="help-block">Limite de 2MB</span>  
                </div>
              </div>

 
      
      <!-- Botão Enviar -->
      <center>
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button type="submit" class="btn btn-inverse">Enviar</button>
        </div>
      </div>
 
      </fieldset>
    </form>
            </div>
          </div>
        </div>
      </main>
    </div>
      
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
