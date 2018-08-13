<?php 
session_start();
include "cabecalho.php";
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {

?>
<form action="cadastrar-aluno.php" method="POST" role="form">
<h1>Cadastro da Educação Infantil 2018</h1>
<div class="row">
	<div class="col-md-6"><label>Zoneamento?</label>
	<select class="form-control" name="Zoneamento" required>
	<option value="">Escolha...</option>
	<option value="Água Mineral">Água Mineral</option>	
	<option value="Altino Barbosa">Altino Barbosa</option>
	<option value="Alto do Instituto">Alto do Instituto</option>
	<option value="Barreiros">Barreiros</option>
	<option value="Bela Vista">Bela Vista</option>
	<option value="Belvedere">Belvedere</option>
	<option value="Castro Pires">Castro Pires</option>
	<option value="Centro">Centro</option>
	<option value="Cidade Alta">Cidade Alta</option>
	<option value="Cidade Nova">Cidade Nova</option>Nova
	<option value="Concórdia">Concórdia</option>
	<option value="Doze de Outubro">Doze de Outubro</option>
	<option value="Doutor Laerte Laender">Doutor Laerte Laender</option>
	<option value="Eldorado">Eldorado</option>
	<option value="Eucalipto">Eucalipto</option>
	<option value="Esperança">Esperança</option>
	<option value="Fátima">Fátima</option>
	<option value="Fazenda Arnô">Fazenda Arnô</option>
	<option value="Filadélfia">Filadélfia</option>
	<option value="Felicidade">Felicidade</option>
	<option value="Frei Dimas">Frei Dimas</option>
	<option value="Frei Júlio">Frei Júlio</option>
	<option value="Frimusa">Frimusa</option>
	<option value="Funcionários">Funcionários</option>
	<option value="Gangorrinha/Minas Novas">Gangorrinha/Minas Novas</option>
	<option value="Grão-pará">Grão-pará</option>
	<option value="Indaiá">Indaiá</option>
	<option value="Itaguaçu">Itaguaçu</option>
	<option value="Ipiranga">Ipiranga</option>
	<option value="Jardim das Acácias">Jardim das Acácias</option>
	<option value="Jardim Floresta">Jardim Floresta</option>
	<option value="Jardim Iracema">Jardim Iracema</option>
	<option value="Jardim São Paulo">Jardim São Paulo</option>
	<option value="Joaquim Pedrosa">Joaquim Pedrosa</option>
	<option value="Laerte Laender">Laerte Laender</option>
	<option value="Lourival Soares da Costa">Lourival Soares de Costa</option>
	<option value="Manoel Pimenta">Manoel Pimenta</option>
	<option value="Matinha">Matinha</option>
	<option value="Marajoara">Marajoara</option>
	<option value="Minas Novas">Minas Novas</option>
	<option value="Monte Carlo">Monte Carlo</option>
	<option value="Morro da Rádio">Morro da Rádio</option>
	<option value="Morro do Cemitério/Vila Progresso">Morro do Cemitério/Vila Progresso</option>
	<option value="Mucuri">Mucuri</option>
	<option value="Novo Horizonte">Novo Horizonte</option>
	<option value="Olga Prates Corrêa">Olga Prates Corrêa</option>
	<option value="Palmeiras">Palmeiras</option>
	<option value="Pampulhinha">Pampulhinha</option>
	<option value="Santa Clara">Santa Clara</option>
	<option value="São Benedito">São Benedito</option>
	<option value="São Cristóvão">São Cristóvão</option>
	<option value="São Diogo">São Diogo</option>
	<option value="São Francisco">São Francisco</option>
	<option value="São Jacinto">São Jacinto</option>
	<option value="São João">São João</option>
	<option value="Serra Verde">Serra Verde</option>
	<option value="Soares da Costa">Soares da Costa</option>
	<option value="Solidariedade">Solidariedade</option>
	<option value="Suíça I e II">Suíça I e II</option>
	<option value="Tabajaras">Tabajaras</option>
	<option value="Taquara">Taquara</option>
	<option value="Teófilo Rocha">Teófilo Rocha</option>
	<option value="Turma 36">Turma 36</option>
	<option value="Turma 37">Turma 37</option>
	<option value="Turma 38">Turma 38</option>
	<option value="Vila Barreiros">Vila Barreiros</option>
	<option value="Vila Betel">Vila Betel</option>
	<option value="Vila da Palha">Vila da Palha</option>
	<option value="Vila Esperança">Vila Esperança</option>
	<option value="Vila Jacaré">Vila Jacaré</option>
	<option value="Vila Ramos">Vila Ramos</option>
	<option value="Vila Verônica">Vila Verônica</option>
	<option value="Vila Vitória">Vila Vitória</option>
	<option value="Vilinha">Vilinha</option>
	<option value="Viriato">Viriato</option>
	</select>
</div>
<div class="col-md-6">
	<label>Período da Educação infantil em que a vaga é solicitada?</label>
<select name="Vaga" class="form-control" required>
	<option value="">Escolha...</option>
	<option value="Berçario 1">Berçario 1 - nascidos de 01/07/2017 a 31/08/2017</option>
	<option value="Berçario 2">Berçario 2 - 01 ano - nascidos de 01/07/2016 a 30/06/2017</option>
	<option value="Maternal 1">Maternal 1 - 02 anos - nascidos de 01/07/2015 a 30/06/2016</option>
	<option value="Maternal 2">Maternal 2 - 03 anos - nascidos de 01/07/2014 a 30/06/2015</option>
	<option value="1º Período">1º Período 2 - 04 anos - nascidos de 01/07/2013 a 30/06/2014</option>
	<option value="2º Período">2º Período 2 - 05 anos - nascidos de 01/07/2012 a 30/06/2013</option>
</select>
</div>
</div>

<h2>Dados da Criança</h2>
<div class="row">
	<div class="col-md-5"><label>Nome:</label>
	<input class="form-control" type="text" name="Nome" required">
	</div>
	<div class="col-md-3"><label>Data Nascimento</label>
	<input type="text" name="Nascimento" class="form-control" onkeyup="dataConta(this);" minlength="10" maxlength="10" onkeypress='return SomenteNumero(event)'>	
	</div>
	<div class="col-md-4"><label>Sexo:</label>
		<input type="radio" name="Sexo" value="Masculino" required >Masculino
		<input type="radio" name="Sexo" value="Feminino">Feminino
	</div>
</div>

<div class="row">
	<div class="col-md-6">
	<label>Apresentou algum documento de identificação?</label>
	Sim:<input type="radio" name="Doc_Identificacao" required value="Sim">
	Não:<input type="radio" name="Doc_Identificacao" value="Não">
	</div>
	<div class="col-md-6">
	<label>Criança transferida da rede particular?</label>
	Sim:<input type="radio" name="Transf_Particular" required value="Sim">
	Não:<input type="radio" name="Transf_Particular" value="Não">	
	</div>
</div>
<h2>Dados Gerais:</h2>
<div class="row">
	<div class="col-md-7">Mãe:
	<input  class="form-control" type="text" name="Mae">
    </div>
    <div class="col-md-5">Telefone Mãe:	
	<input type="text" name="Tel_Mae" class="form-control">
	</div>
</div>

<div class="row">
	<div class="col-md-7">
	Pai:<input type="text" name="Pai" class="form-control">
    </div>
    <div class="col-md-5">
	Telefone Pai:<input type="text" name="Tel_Pai" class="form-control">	
	</div>
</div>

<div class="row">
	<div class="col-md-6">Responsável:
	<input type="text" name="Responsavel" class="form-control">
    </div>
    <div class="col-md-4">Parentesco:
	<input type="text" name="Parentesco" class="form-control">	
	</div>
	<div class="col-md-2">Telefone Responsável
	<input type="text" name="Tel_Responsavel" class="form-control">	
	</div>
</div>

<h2>Endereço:</h2>
<div class="row">
    <div class="col-md-4">Rua:
    <input  class="form-control" type="text" name="Rua">
    </div>
    <div class="col-md-4">Nº:
   	<input type="text" name="Numero" class="form-control">
   </div>
    <div class="col-md-4">Bairro:
	<input  class="form-control" type="text" name="Bairro">
    </div>
</div>

<div class="row">    
    <div class="col-md-4">Cidade:
	<input  class="form-control" type="text" name="Cidade">
   </div>
   <div class="col-md-4">Complemento:
   	<input type="text" name="Complemento" class="form-control">
   </div>
   <div class="col-md-4">Estado:
   	<select class="form-control" name="Estado"> 
     <option value="Acre"</option>
     <option value="Alagoas">Alagoas</option>
     <option value="Amapá">Amapá</option>	 
     <option value="Amazonas">Amazonas</option>
     <option value="Bahia">Bahia</option>
     <option value="Ceará">Ceará</option>	 
     <option value="Distrito Federal">Distrito Federal</option>	
     <option value="Espírito Santo">Espírito Santo</option>
     <option value="Goiás">Goiás</option>
     <option value="Maranhão">Maranhão</option>
     <option value="Mato Grosso">Mato Grosso</option>	 
     <option value="Mato Grosso do Sul ">Mato Grosso do Sul </option>	 
     <option value="Minas Gerais">Minas Gerais</option> 
     <option value="Pará">Pará</option>	 
     <option value="Paraíba">Paraíba</option>	 
     <option value="Paraná">Paraná</option>	 
     <option value="Pernambuco">Pernambuco</option>	 
     <option value="Piauí">Piauí</option>	 
     <option value="Rio de Janeiro">Rio de Janeiro</option>	   
     <option value="Rio Grande do Norte">Rio Grande do Norte</option> 
     <option value="Rio Grande do Sul">Rio Grande do Sul</option>	  
     <option value="Rondônia">Rondônia</option> 
     <option value="Roraima">Roraima</option>	 
     <option value="Santa Catarina">Santa Catarina</option> 
     <option value="São Paulo">São Paulo</option>
     <option value="Sergipe">Sergipe</option>	 
     <option value="Tocantis">Tocantis</option>	 

   	</select>
   </div>
</div>

<div class="row">
         <div class="col-md-6">
         <label>Possui algum tipo deficiência?</label><br />
	     <input type="radio" name="Deficiente" id="DeficienteS" value="SIM" onclick="document.getElementById('Deficiente_Qual').disabled=false;" required/>Sim
         <input type="radio" name="Deficiente" id="DeficienteN" value="NAO" onclick="document.getElementById('Deficiente_Qual').disabled=true;"/>Não
         </div>
         <div class="col-md-6">
            <label>Tipo de deficiência:</label>
             <select name="Deficiente_Qual" class="form-control" required id="Deficiente_Qual" disabled="disabled">
                 <option value="" selected>Escolha...</option>
                 <option value="AUDITIVA">Auditiva</option>
                 <option value="FISICA">Fisica</option>
                 <option value="INTELECTUAL">Intelectual</option>
		         <option value="FALA">Fala</option>
		         <option value="OUTRA">Outra</option>
             </select>
         </div>
</div>

<h2>Informações adicionais:</h2>
<div class="row">
	<div class="col-md-6">
		<label>Responsável pelas Informações:</label><input type="text" name="Resp_Informacao" class="form-control" required">
	</div>
	<div class="col-md-6">	
		<label>Funcionario:</label><input type="text" name="Funcionario" class="form-control" required>
	</div>
</div>
	<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<?php
}else{
	header("Location: login.php");
}
include "rodape.php";
?>
