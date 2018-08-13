<?php
 session_start(); 
 require_once("cabecalho.php"); 
 include "config.php";
  ?>
<div style="width:1200px; overflow: auto;">
	<h1 align="center">Alunos cadastrados</h1>
<table class="table table-striped table-bordered">
	<tr>
		<th colspan="2"></th>
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
	 $total = 0;
     $sql2 = $pdo -> prepare("SELECT count(*) as c FROM aluno");
     $sql2->execute();
     $sql2 = $sql2->fetch();
     $total = $sql2['c'];
     $paginas = $total / 10;
 
     $qntpg = 10;
     $pg= 1;

 if(isset($_GET['p']) && !empty($_GET['p'])){
 	$pg = addslashes($_GET['p']);
 }
        $p = ($pg-1) * $qntpg;

		$sql = $pdo ->prepare("SELECT * FROM aluno order by ID LIMIT $p, $qntpg");
        $sql ->execute();
        if ($sql -> rowCount() > 0) {
        	$sql = $sql ->fetchAll();
		foreach($sql as $aluno) {
	?>
	<tr>
		<td><a class="btn btn-warning" href="imprimir.php?ID=<?=$aluno['ID']?>">Imprimir</a></td>
		<td><a class="btn btn-primary" href="formulario-altera-aluno.php?ID=<?=$aluno['ID']?>">Alterar</a></td>
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
		}
		}
	?>	
</table>		
</div>

<?php
 echo "<hr/>";
 for ($q=0; $q < $paginas; $q++) { 
 	echo '<a href="./listar-aluno.php?p='.($q+1).'" class="btn btn-warning">'.($q+1).'</a>';
 } 
include("rodape.php"); 
?>			
