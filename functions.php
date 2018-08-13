<?php
function insereAluno($nome, $mae, $pai, $responsavel ,$sexo ,$nascimento ,$rua, $numero, $bairro, $cidade, $estado, $complemento,$zoneamento, $vaga, $tel_mae, $tel_pai, $tel_responsavel, $parentesco, $doc_identificacao, $transf_particular, $deficiente, $resp_informacao, $funcionario, $deficiente_qual) {
    include "config.php";
    $sql = $pdo->prepare("INSERT INTO aluno (Nome, Mae, Pai, Responsavel, Sexo, Nascimento, Rua, Numero, Bairro, 
    Cidade, Estado, Complemento, Zoneamento, Vaga, Tel_Mae, Tel_Pai, Tel_Responsavel, Parentesco, Doc_Identificacao, 
    Transf_Particular,Deficiente, Resp_Informacao, Funcionario, Deficiente_Qual,Quando) 
    VALUES (:Nome, :Mae, :Pai, :Responsavel, :Sexo, :Nascimento, :Rua, :Numero, :Bairro, 
    :Cidade, :Estado, :Complemento, :Zoneamento, :Vaga, :Tel_Mae, :Tel_Pai, :Tel_Responsavel, :Parentesco, :Doc_Identificacao, :Transf_Particular, :Deficiente, :Resp_Informacao, :Funcionario, :Deficiente_Qual,now())");
    $sql ->bindValue(":Nome", $nome);
    $sql ->bindValue(":Mae", $mae);
    $sql ->bindValue(":Pai", $pai); 
    $sql ->bindValue(":Responsavel", $responsavel); 
    $sql ->bindValue(":Sexo", $sexo); 
    $sql ->bindValue(":Nascimento", $nascimento); 
    $sql ->bindValue(":Rua", $rua); 
    $sql ->bindValue(":Numero", $numero); 
    $sql ->bindValue(":Bairro", $bairro); 
    $sql ->bindValue(":Cidade", $cidade); 
    $sql ->bindValue(":Estado", $estado);
    $sql ->bindValue(":Complemento", $complemento); 
    $sql ->bindValue(":Zoneamento", $zoneamento);
    $sql ->bindValue(":Vaga", $vaga);
    $sql ->bindValue(":Tel_Mae", $tel_mae);
    $sql ->bindValue(":Tel_Pai", $tel_pai);
    $sql ->bindValue(":Tel_Responsavel", $tel_responsavel);
    $sql ->bindValue(":Parentesco", $parentesco);
    $sql ->bindValue(":Doc_Identificacao", $doc_identificacao);
    $sql ->bindValue(":Transf_Particular", $transf_particular);
    $sql ->bindValue(":Deficiente", $deficiente);
    $sql ->bindValue(":Resp_Informacao", $resp_informacao);
    $sql ->bindValue(":Funcionario", $funcionario);
    $sql ->bindValue(":Deficiente_Qual", $deficiente_qual);
    $sql ->execute();
    header("Location: index.php");
}

function alteraAluno($id, $nome, $mae, $pai, $responsavel ,$sexo ,$nascimento ,$rua, $numero, $bairro, $cidade, $estado, $complemento,$zoneamento, $vaga, $tel_mae, $tel_pai, $tel_responsavel, $parentesco, $doc_identificacao, $transf_particular, $deficiente, $resp_informacao, $funcionario, $deficiente_qual) {
    include "config.php";
    $sql = $pdo->prepare("UPDATE aluno SET Nome =:Nome, Mae = :Mae, Pai = :Pai, Responsavel = :Responsavel, Sexo = :Sexo, Nascimento = :Nascimento, Rua = :Rua, Numero = :Numero, Bairro = :Bairro, Cidade = :Cidade, Estado = :Estado, Complemento = :Complemento, Zoneamento = :Zoneamento, Vaga = :Vaga, Tel_Mae =:Tel_Mae, Tel_Pai = :Tel_Pai, Tel_Responsavel = :Tel_Responsavel, Parentesco = :Parentesco, Doc_Identificacao = :Doc_Identificacao, Transf_Particular = :Transf_Particular, Deficiente = :Deficiente, Resp_Informacao = :Resp_Informacao, Funcionario = :Funcionario, Deficiente_Qual = :Deficiente_Qual, Quando = now() WHERE ID = :id");
    $sql ->bindValue(":id", $id);
    $sql ->bindValue(":Nome", $nome);
    $sql ->bindValue(":Mae", $mae);
    $sql ->bindValue(":Pai", $pai); 
    $sql ->bindValue(":Responsavel", $responsavel); 
    $sql ->bindValue(":Sexo", $sexo); 
    $sql ->bindValue(":Nascimento", $nascimento); 
    $sql ->bindValue(":Rua", $rua); 
    $sql ->bindValue(":Numero", $numero); 
    $sql ->bindValue(":Bairro", $bairro); 
    $sql ->bindValue(":Cidade", $cidade); 
    $sql ->bindValue(":Estado", $estado);
    $sql ->bindValue(":Complemento", $complemento); 
    $sql ->bindValue(":Zoneamento", $zoneamento);
    $sql ->bindValue(":Vaga", $vaga);
    $sql ->bindValue(":Tel_Mae", $tel_mae);
    $sql ->bindValue(":Tel_Pai", $tel_pai);
    $sql ->bindValue(":Tel_Responsavel", $tel_responsavel);
    $sql ->bindValue(":Parentesco", $parentesco);
    $sql ->bindValue(":Doc_Identificacao", $doc_identificacao);
    $sql ->bindValue(":Transf_Particular", $transf_particular);
    $sql ->bindValue(":Deficiente", $deficiente);
    $sql ->bindValue(":Resp_Informacao", $resp_informacao);
    $sql ->bindValue(":Funcionario", $funcionario);
    $sql ->bindValue(":Deficiente_Qual", $deficiente_qual);
    $sql ->execute();
    header("Location: index.php");
}
?>