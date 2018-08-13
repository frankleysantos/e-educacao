<?php
require "cabecalho.php";
require "config.php";
session_start();
if (isset($_POST['cpf']) && !empty($_POST['cpf'])) {
	$usuario = addslashes($_POST['cpf']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = $pdo->prepare("SELECT * FROM login WHERE cpf = :cpf and senha = :senha");
	$sql->bindValue(":cpf", $usuario);
	$sql->bindValue(":senha", $senha);
	$sql->execute();

	if ($sql->rowCount() > 0) {
		$sql = $sql->fetchAll();
		foreach ($sql as $tipo) {
			
		$_SESSION['id'] = $tipo['id'];
		}
   	    header("Location: index.php");
	}
	else{
		?>
    <label class="btn btn-danger form-control"><?php echo "Usuário não existe";?></label>
<?php		
	}
}
?>
<?php
if (isset($_GET['msn']) && !empty($_GET['msn'])) {
$msn = $_GET['msn'];
echo "<label class='btn btn-success form-control'>".$msn."</label>";
}
?>

<form method="POST">
	<legend>Educação</legend>

	<div class="form-group">
		<label class="fa fa-user">&ensp;CPF</label>
		<input type="text" class="form-control" name="cpf" placeholder="Digite o seu CPF" maxlength="11" minlength="11" onblur="return verificarCPF(this.value)" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
	</div>
	<div class="form-group">
		<label class="fa fa-unlock">&ensp;Senha</label>
		<input type="password" class="form-control" name="senha" placeholder="Digite sua Senha">
	</div>

	<button type="submit" class="btn btn-primary fa fa-sign-in">&ensp;Entrar</button>
</form>
<?php
require "rodape.php";
?>