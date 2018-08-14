<?php session_start(); 
require_once("config.php"); ?><!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Recadastramento PMTO">
  <meta name="author" content="CPD - ti@teofilootoni.mg.gov.br">
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="EDUCACAO" />
  <meta property="og:description" content="Prefeitura Municipal de Teófilo Otoni" />
  <meta property="og:url" content="http://localhost/EDUCACAO" />
  <meta property="og:site_name" content="Cadastramento Escolar" />
  <!--link rel="icon" href="resources/img/debian.svg" /-->
  <title>PMTO | Educação</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/print.css" rel="stylesheet" media="print">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 </head>
 <body>
  <div class="container">
   <div class="bg-info hidden-print" style="padding:3px 5px 3px 5px">
    <h2 align="center">Sistema de Cadastro Escolar</h2>
   </div>
   <h3 align="center">Cadastro Educação Infantil 2018</h3>
   <h4 align="center">Ficha de Cadastro</h4>
   <div class="col-lg-12">
    <?php
    $id = $_GET['ID'];
    $sql = $pdo ->prepare("SELECT * FROM aluno WHERE ID = :id");
    $sql ->bindValue(":id", $id);
    $sql ->execute();
    if ($sql ->rowCount() > 0) {
      $sql = $sql->fetchAll();
      foreach ($sql as $aluno) {
    ?>
    <table class='table table-striped table-bordered'>
     <tr>
       <td><label>Nome:&nbsp;<b><?= $aluno['Nome'] ?></b></label></td>
       <td><label>Vaga:&nbsp;<b></b><?= $aluno['Vaga'] ?></label></td> 
       <td><label>Inscrição:&nbsp;<b><?= $aluno['ID'] ?></b></label></td> 
     </tr>
     <tr>
       <td><label>Zoneamento:</label><?= $aluno['Zoneamento'] ?></td>
       <td><label>Mãe:</label><?= $aluno['Mae'] ?></td>
       <td><label>Pai:</label><?= $aluno['Pai'] ?></td>
    </tr>
      <tr>
      <td><label>Responsável:</label><?= $aluno['Responsavel'] ?></td>  
      <td><label>Data de Nascimento:</label><?= $aluno['Nascimento'] ?></td>
      <td><label>Sexo:</label><?= $aluno['Sexo'] ?></td>
     </tr>
   
    <tr>
      <td><label>Rua:</label><?= $aluno['Rua'] ?></td>
      <td><label>Nº:</label><?= $aluno['Numero'] ?></td>
      <td><label>Bairro:</label><?= $aluno['Bairro'] ?></td>
    </tr>
    <tr>
      <td><label>Complemento:</label><?= $aluno['Complemento'] ?></td>
      <td><label>Cidade:</label><?= $aluno['Cidade'] ?></td>
      <td><label>Estado:</label><?= $aluno['Estado'] ?></td>
    </tr>  
    </table>
    <?php
    }
    }
    ?>
   </div>
   <div>
     <p><label>O cadastramento não representa efetivação da vaga, mas a manifestação de interesse da família por uma vaga na rede municipal
     de ensino. No período determinado pela Secretaria Municipal de Educação, a família deverá procurar a escola mais proxima de sua
     residência para efetivar a matrícula da criança cadastrada.</label>
     </p>
     <p><label>As informações são de responsabilidade do declarante e deverão ser comprovadas no dia da matrícula, qualquer informação falsa 
       tornará nulo o cadastramento da sua criança.</label>
     </p>
   </div>
  </div>
  <div class="hidden-print container">
   <p>
    <a href="#" onclick="window.print()" class="btn btn-warning">Confirmar e Imprimir</a>
    <span><a href="index.php" class="btn btn-success">Novo Cadastro</a></span>
    <span class="pull-right"><a href="sair.php" class="btn btn-danger">Sair</a></span>
   </p>
  </div>
  <footer class="container hidden-print">
   <hr />
   <p>&copy; CPD PMTO
    <span class="pull-right">
     Powered By:
     <a href="https://github.com/PrefeituraTO/conferencia" target="_blank"><i class="fa fa-github"></i></a>
     <a href="https://linux.org" target="_blank"><i class="fa fa-linux"></i></a>
     <a href="https://www.w3schools.com/html/html5_intro.asp" target="_blank"><i class="fa fa-html5"></i></a>
     <a href="https://www.w3schools.com/css/css3_intro.asp" target="_blank"><i class="fa fa-css3"></i></a>
    </span>
   </p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
 </body>
</html>
