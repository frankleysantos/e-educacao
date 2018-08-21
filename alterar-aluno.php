<?php
session_start();
include "functions.php";
$id                = addslashes($_POST['ID']);
$nome              = addslashes($_POST['Nome']);
$mae               = addslashes($_POST['Mae']);
$pai               = addslashes($_POST['Pai']);
$responsavel       = addslashes($_POST['Responsavel']);
$sexo              = addslashes($_POST['Sexo']);
$nascimento        = addslashes($_POST['Nascimento']);
$rua               = addslashes($_POST['Rua']);
$numero            = addslashes($_POST['Numero']);
$bairro            = addslashes($_POST['Bairro']);
$cidade            = addslashes($_POST['Cidade']);
$estado            = addslashes($_POST['Estado']);
$complemento       = addslashes($_POST['Complemento']);
$zoneamento        = addslashes($_POST['Zoneamento']);
$vaga              = addslashes($_POST['Vaga']);
$tel_mae           = addslashes($_POST['Tel_Mae']);
$tel_pai           = addslashes($_POST['Tel_Pai']);
$tel_responsavel   = addslashes($_POST['Tel_Responsavel']);
$parentesco        = addslashes($_POST['Parentesco']);
$doc_identificacao = addslashes($_POST['Doc_Identificacao']); 
$transf_particular = addslashes($_POST['Transf_Particular']);
$deficiente        = addslashes($_POST['Deficiente']);
$resp_informacao   = addslashes($_POST['Resp_Informacao']);
$deficiente_qual   = addslashes($_POST['Deficiente_Qual']);
$identidade        = addslashes($_POST['Identidade']);
$rg_responsavel    = addslashes($_POST['RG_Responsavel']);

alteraAluno($id, $nome, $mae, $pai, $responsavel ,$sexo ,$nascimento ,$rua, $numero, $bairro, $cidade, $estado, $complemento, $zoneamento, $vaga, $tel_mae, $tel_pai, $tel_responsavel, $parentesco, $doc_identificacao, $transf_particular, $deficiente, $resp_informacao, $deficiente_qual, $identidade, $rg_responsavel);
?>		
