<html>
<head>
	<meta charset="utf-8">
	<title>Cadastramento</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/functions.js"></script>
    <script src="funcoes.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand fa fa-check" href="index.php?msn=0">Página Inicial</a>
			</div>
			<div class="row">
      <div class="col-md-8">
				<ul class="nav navbar-nav">
          <?php
           if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
          ?>
          <li><a href="listar-aluno.php"><i class="fa fa-list"></i>&ensp;Listar Alunos</a></li>
          <?php }?>
				</ul>
        <ul class="nav navbar-nav">
          <?php
           if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
          ?>
          <li><a href="excel.php"><i class="fa fa-list"></i>&ensp;Gerar Planilha Excel</a></li>
          <?php }?>
        </ul>
        <ul class="nav navbar-nav">
          <?php
           if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
          ?>
          <li><a href="senha.php"><i class="fa fa-list"></i>&ensp;Alterar Senha</a></li>
          <?php }?>
        </ul>
      </div>
      <div class="col-md-2" align="right">
          <ul class="nav navbar-nav">
            <li><?php 
           if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
           echo "<a href='sair.php' class='btn-danger fa fa-sign-out'>&ensp;Sair</a>";
           }
          ?></li>
          </ul>
      </div>
			</div>
		</div>
	</div>
	
	
	<div class="container" style="padding-top: 100px" class="col-md-12">
		<div class="principal">
     <div class="row">
       <div class="col-md-12" align="right">
         <?php
         include "config.php";
          if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $sql = $pdo->prepare("SELECT substring_index(nome, ' ', 1) as primeironome FROM login WHERE id = :id");
            $sql ->bindValue(":id", $id);
            $sql ->execute();
            if ($sql->rowCount() > 0) {
              foreach ($sql as $pessoa) {
                echo "<label class='btn btn-default'>Bem Vindo:&ensp;".$pessoa['primeironome']."</label>";
              }
            }
          }
         ?>
       </div>
     </div>
     <p align="center"><img src="img/logo.png"></p>
     <h3 align="center">Secretaria Municipal de Educação, Ciência e Tecnologia.</h3>
     <hr>
			