<?php  
session_start();
include "functions.php";
$nome              = $_POST['Nome'];
$mae               = $_POST['Mae'];
$pai               = $_POST['Pai'];
$responsavel       = $_POST['Responsavel'];
$sexo              = $_POST['Sexo'];
$nascimento        = $_POST['Nascimento'];
$rua               = $_POST['Rua'];
$numero            = $_POST['Numero'];
$bairro            = $_POST['Bairro'];
$cidade            = $_POST['Cidade'];
$estado            = $_POST['Estado'];
$complemento       = $_POST['Complemento'];
$zoneamento        = $_POST['Zoneamento'];
$vaga              = $_POST['Vaga'];
$tel_mae           = $_POST['Tel_Mae'];
$tel_pai           = $_POST['Tel_Pai'];
$tel_responsavel   = $_POST['Tel_Responsavel'];
$parentesco        = $_POST['Parentesco'];
$doc_identificacao = $_POST['Doc_Identificacao']; 
$transf_particular = $_POST['Transf_Particular'];
$deficiente        = $_POST['Deficiente'];
$resp_informacao   = $_POST['Resp_Informacao'];
$funcionario       = $_POST['Funcionario'];
$deficiente_qual  = $_POST['Deficiente_Qual'];
insereAluno($nome, $mae, $pai, $responsavel ,$sexo ,$nascimento ,$rua, $numero, $bairro, $cidade, $estado, $complemento,$zoneamento, $vaga, $tel_mae, $tel_pai, $tel_responsavel, $parentesco, $doc_identificacao, $transf_particular, $deficiente, $resp_informacao, $funcionario, $deficiente_qual );
?>