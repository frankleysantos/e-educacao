<?php
session_start();
 require_once("config.php");
  ?>
  <meta charset="utf-8">
  <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-type: application/force-download");
    header("Content-Disposition: attachment; filename=alunos.xls");
    header("Pragma: no-cache");
?>
<div>
	<h1>Alunos cadastrados</h1>
<table class="table table-striped table-bordered">
	<tr>
		<th>Matrícula</th>
		<th>Aluno</th>
		<th>Mãe</th>
		<th>Pai</th>
        <th>Responsável</th>
        <th>Sexo</th>
        <th>Nascimento</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Número</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Complemento</th>
        <th>Zoneamento</th>
        <th>Vaga</th>
        <th>Deficiente</th>
        <th>Deficiente_Qual</th>
        <th>Telefone Mãe</th>
        <th>Telefone Pai</th>
        <th>Telefone Responsável</th>
        <th>Doc. Identificação</th>
        <th>Resp. Informação</th>
        <th>Funcionário</th>        
	</tr>
	<?php
	    $sql = $pdo->prepare("SELECT * FROM aluno ORDER BY ID");
		$sql ->execute();
		$sql = $sql->fetchAll();
		foreach($sql as $aluno) :
	?>
	<tr>
		<td><?= $aluno['ID'] ?></td>
		<td><?= $aluno['Nome'] ?></td>
		<td><?= $aluno['Mae'] ?></td>
		<td><?= $aluno['Pai'] ?></td>
		<td><?= $aluno['Responsavel'] ?></td>
		<td><?= $aluno['Sexo'] ?></td>
		<td><?= $aluno['Nascimento'] ?></td>
		<td><?= $aluno['Rua'] ?></td>
		<td><?= $aluno['Bairro'] ?></td>
		<td><?= $aluno['Numero'] ?></td>
		<td><?= $aluno['Cidade'] ?></td>
		<td><?= $aluno['Estado'] ?></td>
		<td><?= $aluno['Complemento'] ?></td>
		<td><?= $aluno['Zoneamento'] ?></td>
		<td><?= $aluno['Vaga'] ?></td>
		<td><?= $aluno['Deficiente'] ?></td>
		<td><?= $aluno['Deficiente_Qual'] ?></td>
		<td><?= $aluno['Tel_Mae'] ?></td>
		<td><?= $aluno['Tel_Pai'] ?></td>
		<td><?= $aluno['Tel_Responsavel'] ?></td>
		<td><?= $aluno['Doc_Identificacao'] ?></td>
		<td><?= $aluno['Resp_Informacao']?></td>
		<td><?= $aluno['Funcionario']?></td>
	</tr>
	<?php
		endforeach
	?>	
</table>		
</div>		
