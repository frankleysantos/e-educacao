<?php 
include "config.php";
include "cabecalho.php";
if (isset($_POST['cpf']) && !empty($_POST['cpf'])) {
	$cpf = $_POST['cpf'];
	$sql = $pdo ->prepare("SELECT * FROM login WHERE cpf = :cpf");
	$sql ->bindValue(":cpf", $cpf);
	$sql ->execute();
	if ($sql -> rowCount() > 0) {
		echo "<label class='form-control btn-danger'>Usuário já esta cadastrado.</label>";
	}else{
		$nome = addslashes($_POST['nome']);
		$senha = addslashes(md5($_POST['senha']));
		$email = addslashes($_POST['email']);
		$sql2 = $pdo ->prepare("INSERT INTO login (nome, cpf, senha, email) VALUES (:nome, :cpf, :senha, :email)");
		$sql2 ->bindValue(":nome", $nome);
		$sql2 ->bindValue(":cpf", $cpf);
		$sql2 ->bindValue(":senha", $senha);
		$sql2 ->bindValue(":email", $email);
		$sql2 ->execute();
		echo "<label class='form-control btn-success'>Usuário Inserido com Sucesso!</label>";
	}
}
?>
<form action="" method="POST" role="form">
	<legend>Cadastro de Usuários</legend>

	<div class="form-group">
		<label for="">Nome</label>
		<input type="text" class="form-control" id="" placeholder="Nome" name="nome" required>
	</div>
	<div class="form-group">
		<label for="">CPF</label>
		<input type="text" class="form-control" id="" placeholder="CPF - Somente Numeros" name="cpf" required>
	</div>
	<div class="form-group">
		<label for="">Senha</label>
		<input type="password" class="form-control" id="" placeholder="Senha" name="senha" required>
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" class="form-control" id="" placeholder="mail@gmail.com" name="email" required>
	</div>
	<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<?php
include "rodape.php";
?>