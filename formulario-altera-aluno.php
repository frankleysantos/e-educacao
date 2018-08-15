<?php 
session_start();
include "cabecalho.php";
include "config.php";
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
   $id = $_GET['ID'];
   $sql = $pdo -> prepare("SELECT * FROM aluno WHERE ID = :id");
   $sql ->bindValue(":id", $id);
   $sql ->execute();
   if ($sql ->rowCount() > 0) {
   	$sql = $sql->fetchAll();
   	foreach ($sql as $aluno) {
   		
?>
<form action="alterar-aluno.php" method="POST" role="form">
<h1>Cadastro da Educação Infantil 2019</h1>
     <input type="hidden" name="ID" value="<?php echo $aluno['ID'];?>">
<div class="row">
	<div class="col-md-6"><label>Zoneamento?</label>
	<select class="form-control" name="Zoneamento" required>
	<option value="">Escolha...</option>
	<option value="Água Mineral"<?php if($aluno['Zoneamento']=="Água Mineral") echo "selected";?>>Água Mineral</option>	
	<option value="Altino Barbosa"<?php if($aluno['Zoneamento']=="Altino Barbosa") echo "selected";?>>Altino Barbosa</option>
	<option value="Alto do Instituto"<?php if($aluno['Zoneamento']=="Alto do Instituto") echo "selected";?>>Alto do Instituto</option>
	<option value="Barreiros"<?php if($aluno['Zoneamento']=="Barreiros") echo "selected";?>>Barreiros</option>
	<option value="Bela Vista"<?php if($aluno['Zoneamento']=="Bela Vista") echo "selected";?>>Bela Vista</option>
	<option value="Belvedere"<?php if($aluno['Zoneamento']=="Belvedere") echo "selected";?>>Belvedere</option>
	<option value="Castro Pires"<?php if($aluno['Zoneamento']=="Castro Pires") echo "selected";?>>Castro Pires</option>
	<option value="Centro" <?php if($aluno['Zoneamento']=="Centro") echo "selected";?>>Centro</option>
	<option value="Cidade Alta" <?php if($aluno['Zoneamento']=="Cidade Alta") echo "selected";?>>Cidade Alta</option>
	<option value="Cidade Nova" <?php if($aluno['Zoneamento']=="Cidade Nova") echo "selected";?>>Cidade Nova</option>Nova
	<option value="Concórdia" <?php if($aluno['Zoneamento']=="Concórdia") echo "selected";?>>Concórdia</option>
	<option value="Doze de Outubro" <?php if($aluno['Zoneamento']=="Doze de Outubro") echo "selected";?>>Doze de Outubro</option>
	<option value="Doutor Laerte Laender" <?php if($aluno['Zoneamento']=="Doutor Laerte Laender") echo "selected";?>>Doutor Laerte Laender</option>
	<option value="Eldorado" <?php if($aluno['Zoneamento']=="Eldorado") echo "selected";?>>Eldorado</option>
	<option value="Eucalipto" <?php if($aluno['Zoneamento']=="Eucalipto") echo "selected";?>>Eucalipto</option>
	<option value="Esperança" <?php if($aluno['Zoneamento']=="Esperança") echo "selected";?>>Esperança</option>
	<option value="Fátima" <?php if($aluno['Zoneamento']=="Fátima") echo "selected";?>>Fátima</option>
	<option value="Fazenda Arnô" <?php if($aluno['Zoneamento']=="Fazenda Arnô") echo "selected";?>>Fazenda Arnô</option>
	<option value="Filadélfia" <?php if($aluno['Zoneamento']=="Filadélfia") echo "selected";?>>Filadélfia</option>
	<option value="Felicidade" <?php if($aluno['Zoneamento']=="Felicidade") echo "selected";?>>Felicidade</option>
	<option value="Frei Dimas" <?php if($aluno['Zoneamento']=="Frei Dimas") echo "selected";?>>Frei Dimas</option>
	<option value="Frei Júlio" <?php if($aluno['Zoneamento']=="Frei Júlio") echo "selected";?>>Frei Júlio</option>
	<option value="Frimusa" <?php if($aluno['Zoneamento']=="Frimusa") echo "selected";?>>Frimusa</option>
	<option value="Funcionários" <?php if($aluno['Zoneamento']=="Funcionários") echo "selected";?>>Funcionários</option>
	<option value="Gangorrinha/Minas Novas" <?php if($aluno['Zoneamento']=="Gangorrinha/Minas Novas") echo "selected";?>>Gangorrinha/Minas Novas</option>
	<option value="Grão-pará" <?php if($aluno['Zoneamento']=="Grão-pará") echo "selected";?>>Grão-pará</option>
	<option value="Indaiá" <?php if($aluno['Zoneamento']=="Indaiá") echo "selected";?>>Indaiá</option>
	<option value="Itaguaçu" <?php if($aluno['Zoneamento']=="Itaguaçu") echo "selected";?>>Itaguaçu</option>
	<option value="Ipiranga" <?php if($aluno['Zoneamento']=="Ipiranga") echo "selected";?>>Ipiranga</option>
	<option value="Jardim das Acácias" <?php if($aluno['Zoneamento']=="Jardim das Acácias") echo "selected";?>>Jardim das Acácias</option>
	<option value="Jardim Floresta" <?php if($aluno['Zoneamento']=="Jardim Floresta") echo "selected";?>>Jardim Floresta</option>
	<option value="Jardim Iracema" <?php if($aluno['Zoneamento']=="Jardim Iracema") echo "selected";?>>Jardim Iracema</option>
	<option value="Jardim São Paulo" <?php if($aluno['Zoneamento']=="Jardim São Paulo") echo "selected";?>>Jardim São Paulo</option>
	<option value="Joaquim Pedrosa" <?php if($aluno['Zoneamento']=="Joaquim Pedrosa") echo "selected";?>>Joaquim Pedrosa</option>
	<option value="Laerte Laender" <?php if($aluno['Zoneamento']=="Laerte Laender") echo "selected";?>>Laerte Laender</option>
	<option value="Lourival Soares da Costa" <?php if($aluno['Zoneamento']=="Lourival Soares da Costa") echo "selected";?>>Lourival Soares de Costa</option>
	<option value="Manoel Pimenta" <?php if($aluno['Zoneamento']=="Manoel Pimenta") echo "selected";?>>Manoel Pimenta</option>
	<option value="Matinha" <?php if($aluno['Zoneamento']=="Matinha") echo "selected";?>>Matinha</option>
	<option value="Marajoara" <?php if($aluno['Zoneamento']=="Marajoara") echo "selected";?>>Marajoara</option>
	<option value="Minas Novas" <?php if($aluno['Zoneamento']=="Minas Novas") echo "selected";?>>Minas Novas</option>
	<option value="Monte Carlo" <?php if($aluno['Zoneamento']=="Monte Carlo") echo "selected";?>>Monte Carlo</option>
	<option value="Morro da Rádio" <?php if($aluno['Zoneamento']=="Morro da Rádio") echo "selected";?>>Morro da Rádio</option>
	<option value="Morro do Cemitério/Vila Progresso" <?php if($aluno['Zoneamento']=="Morro do Cemitério/Vila Progresso") echo "selected";?>>Morro do Cemitério/Vila Progresso</option>
	<option value="Mucuri" <?php if($aluno['Zoneamento']=="Mucuri") echo "selected";?>>Mucuri</option>
	<option value="Novo Horizonte" <?php if($aluno['Zoneamento']=="Novo Horizonte") echo "selected";?>>Novo Horizonte</option>
	<option value="Olga Prates Corrêa" <?php if($aluno['Zoneamento']=="Olga Prates Corrêa") echo "selected";?>>Olga Prates Corrêa</option>
	<option value="Palmeiras" <?php if($aluno['Zoneamento']=="Palmeiras") echo "selected";?>>Palmeiras</option>
	<option value="Pampulhinha" <?php if($aluno['Zoneamento']=="Pampulhinha") echo "selected";?>>Pampulhinha</option>
	<option value="Santa Clara" <?php if($aluno['Zoneamento']=="Santa Clara") echo "selected";?>>Santa Clara</option>
	<option value="São Benedito" <?php if($aluno['Zoneamento']=="São Benedito") echo "selected";?>>São Benedito</option>
	<option value="São Cristóvão" <?php if($aluno['Zoneamento']=="São Cristóvão") echo "selected";?>>São Cristóvão</option>
	<option value="São Diogo" <?php if($aluno['Zoneamento']=="São Diogo") echo "selected";?>>São Diogo</option>
	<option value="São Francisco" <?php if($aluno['Zoneamento']=="São Francisco") echo "selected";?>>São Francisco</option>
	<option value="São Jacinto" <?php if($aluno['Zoneamento']=="São Jacinto") echo "selected";?>>São Jacinto</option>
	<option value="São João" <?php if($aluno['Zoneamento']=="São João") echo "selected";?>>São João</option>
	<option value="Serra Verde" <?php if($aluno['Zoneamento']=="Serra Verde") echo "selected";?>>Serra Verde</option>
	<option value="Soares da Costa" <?php if($aluno['Zoneamento']=="Soares da Costa") echo "selected";?>>Soares da Costa</option>
	<option value="Solidariedade" <?php if($aluno['Zoneamento']=="Solidariedade") echo "selected";?>>Solidariedade</option>
	<option value="Suíça I e II" <?php if($aluno['Zoneamento']=="Suíça I e II") echo "selected";?>>Suíça I e II</option>
	<option value="Tabajaras" <?php if($aluno['Zoneamento']=="Tabajaras") echo "selected";?>>Tabajaras</option>
	<option value="Taquara" <?php if($aluno['Zoneamento']=="Taquara") echo "selected";?>>Taquara</option>
	<option value="Teófilo Rocha" <?php if($aluno['Zoneamento']=="Teófilo Rocha") echo "selected";?>>Teófilo Rocha</option>
	<option value="Turma 36" <?php if($aluno['Zoneamento']=="Turma 36") echo "selected";?>>Turma 36</option>
	<option value="Turma 37" <?php if($aluno['Zoneamento']=="Turma 37") echo "selected";?>>Turma 37</option>
	<option value="Turma 38" <?php if($aluno['Zoneamento']=="Turma 38") echo "selected";?>>Turma 38</option>
	<option value="Vila Barreiros" <?php if($aluno['Zoneamento']=="Vila Barreiros") echo "selected";?>>Vila Barreiros</option>
	<option value="Vila Betel" <?php if($aluno['Zoneamento']=="Vila Betel") echo "selected";?>>Vila Betel</option>
	<option value="Vila da Palha" <?php if($aluno['Zoneamento']=="Vila da Palha") echo "selected";?>>Vila da Palha</option>
	<option value="Vila Esperança" <?php if($aluno['Zoneamento']=="Vila Esperança") echo "selected";?>>Vila Esperança</option>
	<option value="Vila Jacaré" <?php if($aluno['Zoneamento']=="Vila Jacaré") echo "selected";?>>Vila Jacaré</option>
	<option value="Vila Ramos" <?php if($aluno['Zoneamento']=="Vila Ramos") echo "selected";?>>Vila Ramos</option>
	<option value="Vila Verônica" <?php if($aluno['Zoneamento']=="Vila Verônica") echo "selected";?>>Vila Verônica</option>
	<option value="Vila Vitória" <?php if($aluno['Zoneamento']=="Vila Vitória") echo "selected";?>>Vila Vitória</option>
	<option value="Vilinha" <?php if($aluno['Zoneamento']=="Vilinha") echo "selected";?>>Vilinha</option>
	<option value="Viriato" <?php if($aluno['Zoneamento']=="Viriato") echo "selected";?>>Viriato</option>
	</select>
</div>
<div class="col-md-6">
	<label>Período da Educação infantil em que a vaga é solicitada?</label>
<select name="Vaga" class="form-control" required>
	<option value="">Escolha...</option>
	<option value="Berçario 1"<?php if($aluno['Vaga']=="Berçario 1") echo "selected";?>>Berçario 1 - nascidos até 01/08/2018</option>
	<option value="Berçario 2"<?php if($aluno['Vaga']=="Berçario 2") echo "selected";?>>Berçario 2 - 01 ano - nascidos de 01/07/2017 a 30/06/2018</option>
	<option value="Maternal 1"<?php if($aluno['Vaga']=="Maternal 1") echo "selected";?>>Maternal 1 - 02 anos - nascidos de 01/07/2016 a 30/06/2017</option>
	<option value="Maternal 2"<?php if($aluno['Vaga']=="Maternal 2") echo "selected";?>>Maternal 2 - 03 anos - nascidos de 01/07/2015 a 30/06/2016</option>
	<option value="1º Período"<?php if($aluno['Vaga']=="1º Período") echo "selected";?>>1º Período 2 - 04 anos - nascidos de 01/07/2014 a 30/06/2015</option>
	<option value="2º Período"<?php if($aluno['Vaga']=="2º Período") echo "selected";?>>2º Período 2 - 05 anos - nascidos de 01/07/2013 a 30/06/2014</option>
</select>
</div>
</div>

<h2>Dados da Criança</h2>
<div class="row">
	<div class="col-md-5"><label>Nome:</label>
	<input class="form-control" type="text" name="Nome" required value="<?php echo $aluno['Nome']?>" onkeyup="maiuscula(this);">
	</div>
	<div class="col-md-3"><label>Data Nascimento</label>
	<input type="text" name="Nascimento" value="<?php echo $aluno['Nascimento']?>" class="form-control" onkeypress="dataConta(this); return event.charCode >= 48 && event.charCode <= 57;" minlength="10" maxlength="10" required>	
	</div>
	<div class="col-md-4"><label>Sexo:</label>
		<input type="radio" name="Sexo" value="Masculino" required <?php if($aluno['Sexo']=="Masculino") echo "checked";?>>Masculino
		<input type="radio" name="Sexo" value="Feminino" <?php if($aluno['Sexo']=="Feminino") echo "checked";?>>Feminino
	</div>
</div>

<div class="row">
	<div class="col-md-6">
	<label>Apresentou algum documento de identificação?</label>
	Sim:<input type="radio" name="Doc_Identificacao" required value="Sim" <?php if($aluno['Doc_Identificacao']=="Sim") echo "checked";?>>
	Não:<input type="radio" name="Doc_Identificacao" value="Não" <?php if($aluno['Doc_Identificacao']=="Não") echo "checked";?>>
	</div>
	<div class="col-md-6">
	<label>Criança transferida da rede particular?</label>
	Sim:<input type="radio" name="Transf_Particular" required value="Sim" <?php if($aluno['Transf_Particular']=="Sim") echo "checked";?>>
	Não:<input type="radio" name="Transf_Particular" value="Não" <?php if($aluno['Transf_Particular']=="Não") echo "checked";?>>	
	</div>
</div>
<h2>Dados Gerais:</h2>
<div class="row">
	<div class="col-md-5">Mãe:
	<input  class="form-control" type="text" name="Mae" value="<?php echo $aluno['Mae']?>" onkeyup="maiuscula(this);">
    </div>
    <div class="col-md-3">Telefone Mãe:	
	<input type="text" name="Tel_Mae" class="form-control" value="<?php echo $aluno['Tel_Mae']?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
	</div>
	<div class="col-md-4">RG Mãe:	
	<input type="text" name="Identidade" class="form-control" value="<?php echo $aluno['Identidade']?>" onkeyup="maiuscula(this);">
	</div>
</div>

<div class="row">
	<div class="col-md-7">
	Pai:<input type="text" name="Pai" class="form-control" value="<?php echo $aluno['Pai']?>" onkeyup="maiuscula(this);">
    </div>
    <div class="col-md-5">
	Telefone Pai:<input type="text" name="Tel_Pai" class="form-control" value="<?php echo $aluno['Tel_Pai']?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57">	
	</div>
</div>

<div class="row">
	<div class="col-md-6">Responsável:
	<input type="text" name="Responsavel" class="form-control" value="<?php echo $aluno['Responsavel']?>" onkeyup="maiuscula(this);">
    </div>
    <div class="col-md-4">Parentesco:
	<input type="text" name="Parentesco" class="form-control" value="<?php echo $aluno['Parentesco']?>" onkeyup="maiuscula(this);">	
	</div>
	<div class="col-md-2">Telefone Responsável
	<input type="text" name="Tel_Responsavel" class="form-control" value="<?php echo $aluno['Tel_Responsavel']?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57">	
	</div>
</div>

<h2>Endereço:</h2>
<div class="row">
    <div class="col-md-4">Rua:
    <input  class="form-control" type="text" name="Rua" value="<?php echo $aluno['Rua']?>" onkeyup="maiuscula(this);">
    </div>
    <div class="col-md-4">Nº:
   	<input type="text" name="Numero" class="form-control" value="<?php echo $aluno['Numero']?>">
   </div>
    <div class="col-md-4">Bairro:
	<input  class="form-control" type="text" name="Bairro" value="<?php echo $aluno['Bairro']?>" onkeyup="maiuscula(this);">
    </div>
</div>

<div class="row">    
    <div class="col-md-4">Cidade:
	<input  class="form-control" type="text" name="Cidade" value="<?php echo $aluno['Cidade']?>" onkeyup="maiuscula(this);">
   </div>
   <div class="col-md-4">Complemento:
   	<input type="text" name="Complemento" class="form-control" value="<?php echo $aluno['Complemento']?>" onkeyup="maiuscula(this);">
   </div>
   <div class="col-md-4">Estado:
   	<select class="form-control" name="Estado">
   	 <option value=""<?php if($aluno['Estado']=='') echo "selected";?>>Escolha...</option> 
     <option value="Acre"<?php if($aluno['Estado']=='Acre') echo "selected";?>>Acre</option>
     <option value="Alagoas"<?php if($aluno['Estado']=='Alagoas') echo "selected";?>>Alagoas</option>
     <option value="Amapá"<?php if($aluno['Estado']=='Amapá') echo "selected";?>>Amapá</option>	 
     <option value="Amazonas"<?php if($aluno['Estado']=='Amazonas') echo "selected";?>>Amazonas</option>
     <option value="Bahia"<?php if($aluno['Estado']=='Bahia') echo "selected";?>>Bahia</option>
     <option value="Ceará"<?php if($aluno['Estado']=='Ceará') echo "selected";?>>Ceará</option>	 
     <option value="Distrito Federal"<?php if($aluno['Estado']=='Distrito Federal') echo "selected";?>>Distrito Federal</option>	
     <option value="Espírito Santo"<?php if($aluno['Estado']=='Espírito Santo') echo "selected";?>>Espírito Santo</option>
     <option value="Goiás"<?php if($aluno['Estado']=='Goiás') echo "selected";?>>Goiás</option>
     <option value="Maranhão"<?php if($aluno['Estado']=='Maranhão') echo "selected";?>>Maranhão</option>
     <option value="Mato Grosso"<?php if($aluno['Estado']=='Mato Grosso') echo "selected";?>>Mato Grosso</option>	 
     <option value="Mato Grosso do Sul "<?php if($aluno['Estado']=='Mato Grosso do Sul ') echo "selected";?>>Mato Grosso do Sul </option>	 
     <option value="Minas Gerais"<?php if($aluno['Estado']=='Minas Gerais') echo "selected";?>>Minas Gerais</option> 
     <option value="Pará"<?php if($aluno['Estado']=='Pará') echo "selected";?>>Pará</option>	 
     <option value="Paraíba"<?php if($aluno['Estado']=='Paraíba') echo "selected";?>>Paraíba</option>	 
     <option value="Paraná"<?php if($aluno['Estado']=='Paraná') echo "selected";?>>Paraná</option>	 
     <option value="Pernambuco"<?php if($aluno['Estado']=='Pernambuco') echo "selected";?>>Pernambuco</option>	 
     <option value="Piauí"<?php if($aluno['Estado']=='Piauí') echo "selected";?>>Piauí</option>	 
     <option value="Rio de Janeiro"<?php if($aluno['Estado']=='Rio de Janeiro') echo "selected";?>>Rio de Janeiro</option>	   
     <option value="Rio Grande do Norte"<?php if($aluno['Estado']=='Rio Grande do Norte') echo "selected";?>>Rio Grande do Norte</option> 
     <option value="Rio Grande do Sul"<?php if($aluno['Estado']=='Rio Grande do Sul') echo "selected";?>>Rio Grande do Sul</option>	  
     <option value="Rondônia"<?php if($aluno['Estado']=='Rondônia') echo "selected";?>>Rondônia</option> 
     <option value="Roraima"<?php if($aluno['Estado']=='Roraima') echo "selected";?>>Roraima</option>	 
     <option value="Santa Catarina"<?php if($aluno['Estado']=='Santa Catarina') echo "selected";?>>Santa Catarina</option> 
     <option value="São Paulo"<?php if($aluno['Estado']=='São Paulo') echo "selected";?>>São Paulo</option>
     <option value="Sergipe"<?php if($aluno['Estado']=='Sergipe') echo "selected";?>>Sergipe</option>	 
     <option value="Tocantis"<?php if($aluno['Estado']=='Tocantis') echo "selected";?>>Tocantis</option>	 

   	</select>
   </div>
</div>

<div class="row">
         <div class="col-md-6">
         <label>Possui algum tipo deficiência?</label><br />
	 <input type="radio" onclick="document.getElementById('deficiente_Qual').disabled=false;" name="Deficiente" id="DeficienteS" value="SIM"<?php if($aluno['Deficiente']=="SIM")echo "checked";?>  required/>Sim
         <input type="radio" onclick="document.getElementById('deficiente_Qual').disabled=true; document.getElementById('deficiente_Qual').value='';" name="Deficiente" id="DeficienteN" value="NAO"<?php if($aluno['Deficiente']=="NAO")echo "checked"; ?>/>Não
         </div>
         <div class="col-md-6">
            <label>Tipo de deficiência:</label>
             <select name="Deficiente_Qual" class="form-control" id="deficiente_Qual" required value="<?php echo $aluno['Deficiente_Qual']?>" <?php if($aluno['Deficiente_Qual']=="")echo "disabled"; ?>>
                 <option value=""<?php if($aluno['Deficiente_Qual']=="")echo "selected"; ?>>Escolha...</option>
                 <option value="AUDITIVA"<?php if($aluno['Deficiente_Qual']=="AUDITIVA")echo "selected"; ?>>Auditiva</option>
                 <option value="FISICA"<?php if($aluno['Deficiente_Qual']=="FISICA")echo "selected"; ?>>Fisica</option>
                 <option value="INTELECTUAL"<?php if($aluno['Deficiente_Qual']=="INTELECTUAL")echo "selected"; ?>>Intelectual</option>
		         <option value="FALA"<?php if($aluno['Deficiente_Qual']=="FALA")echo "selected"; ?>>Fala</option>
		         <option value="OUTRA"<?php if($aluno['Deficiente_Qual']=="OUTRA")echo "selected"; ?>>Outra</option>
             </select>
         </div>
</div>

<h2>Informações adicionais:</h2>
<div class="row">
	<div class="col-md-6">
		Responsável pelas Informações: <input type="text" name="Resp_Informacao" class="form-control" required value="<?php echo $aluno['Resp_Informacao'] ?>" onkeyup="maiuscula(this);">
	</div>
</div>
<hr>
	<button type="submit" class="btn btn-success">Salvar Alterações</button>
</form>
<?php
     }
   }
}else{
	header("Location: login.php");
}
include "rodape.php";
?>
