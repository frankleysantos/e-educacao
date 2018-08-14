<?php
function insereAluno($nome, $mae, $pai, $responsavel ,$sexo ,$nascimento ,$rua, $numero, $bairro, $cidade, $estado, $complemento,$zoneamento, $vaga, $tel_mae, $tel_pai, $tel_responsavel, $parentesco, $doc_identificacao, $transf_particular, $deficiente, $resp_informacao, $deficiente_qual, $identidade) {
    include "config.php";
    $idfuncionario = $_SESSION['id'];
    $sql = $pdo->prepare("INSERT INTO aluno (Nome, Mae, Pai, Responsavel, Sexo, Nascimento, Rua, Numero, Bairro, 
    Cidade, Estado, Complemento, Zoneamento, Vaga, Tel_Mae, Tel_Pai, Tel_Responsavel, Parentesco, Doc_Identificacao, 
    Transf_Particular,Deficiente, Resp_Informacao, Deficiente_Qual, Identidade, id_funcionario, Quando) 
    VALUES (:Nome, :Mae, :Pai, :Responsavel, :Sexo, :Nascimento, :Rua, :Numero, :Bairro, 
    :Cidade, :Estado, :Complemento, :Zoneamento, :Vaga, :Tel_Mae, :Tel_Pai, :Tel_Responsavel, :Parentesco, :Doc_Identificacao, :Transf_Particular, :Deficiente, :Resp_Informacao, :Deficiente_Qual, :Identidade, :id_funcionario, now())");
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
    $sql ->bindValue(":Deficiente_Qual", $deficiente_qual);
    $sql ->bindValue(":Identidade", $identidade);
    $sql ->bindValue(":id_funcionario", $idfuncionario);
    $sql ->execute();
    $id = $pdo->lastInsertId();
    header("Location: imprimir.php?ID=$id");
}

function alteraAluno($id, $nome, $mae, $pai, $responsavel ,$sexo ,$nascimento ,$rua, $numero, $bairro, $cidade, $estado, $complemento,$zoneamento, $vaga, $tel_mae, $tel_pai, $tel_responsavel, $parentesco, $doc_identificacao, $transf_particular, $deficiente, $resp_informacao, $deficiente_qual, $identidade) {
    include "config.php";
    $idfuncionario = $_SESSION['id'];
    $sql = $pdo->prepare("UPDATE aluno SET Nome =:Nome, Mae = :Mae, Pai = :Pai, Responsavel = :Responsavel, Sexo = :Sexo, Nascimento = :Nascimento, Rua = :Rua, Numero = :Numero, Bairro = :Bairro, Cidade = :Cidade, Estado = :Estado, Complemento = :Complemento, Zoneamento = :Zoneamento, Vaga = :Vaga, Tel_Mae =:Tel_Mae, Tel_Pai = :Tel_Pai, Tel_Responsavel = :Tel_Responsavel, Parentesco = :Parentesco, Doc_Identificacao = :Doc_Identificacao, Transf_Particular = :Transf_Particular, Deficiente = :Deficiente, Resp_Informacao = :Resp_Informacao, Deficiente_Qual = :Deficiente_Qual, Identidade = :Identidade, id_funcionario = :id_funcionario, Quando = now() WHERE ID = :id");
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
    $sql ->bindValue(":Deficiente_Qual", $deficiente_qual);
    $sql ->bindValue(":Identidade", $identidade);
    $sql ->bindValue(":id_funcionario", $idfuncionario);
    $sql ->execute();
    header("Location: imprimir.php?ID=$id");
}


function sendMail($mail,$subject,$body){
    $header  = "Content-type: text/html; charset=\"UTF-8\" \r\n";
    $header .= "From: Processo Seletivo Simplificado - Teófilo Otoni<noreply@teofilootoni.mg.gov.br>" . "\r\n";
    $header .= "Reply-To: Tecnologia da Informação <ti@teofilootoni.mg.gov.br>" . "\r\n" ;
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-Transfer-Encoding: 8bit \r\n";
    $header .= "Date: ".date("r (T)")." \r\n";

    if(mail($mail,$subject,$body,$header))  return true;
    else                    return false;
    
}

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false)
{
$lmin = 'abcdefghijklmnopqrstuvwxyz';
$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$num = '1234567890';
$simb = '!@#$%*-';
$retorno = '';
$caracteres = '';
$caracteres .= $lmin;
if ($maiusculas) $caracteres .= $lmai;
if ($numeros) $caracteres .= $num;
if ($simbolos) $caracteres .= $simb;
$len = strlen($caracteres);
for ($n = 1; $n <= $tamanho; $n++) {
$rand = mt_rand(1, $len);
$retorno .= $caracteres[$rand-1];
}
return $retorno;
}

function buscasenha($cpf, $email){
    include "config.php";
    $sql = $pdo->prepare("SELECT * FROM login WHERE cpf = :cpf AND email = :email ");
    $sql ->bindValue(":cpf", $cpf);
    $sql ->bindValue(":email", $email);
    $sql ->execute();

    if ($sql->rowCount() > 0) {
        $senha = geraSenha(15, true, true, true);
        $sql2 = $pdo->prepare("UPDATE login SET senha = md5(:senha) WHERE cpf = :cpf");
        $sql2 ->bindValue(":cpf", $cpf);
        $sql2 ->bindValue(":senha", $senha);
        $sql2 ->execute(); 
         $mail= $email;
         $subject="Foi realizada a alteração da sua senha.";
         $body = "<h3>Prezado!</h3>
         <p>Segue abaixo a sua nova senha. Para altera-la logue no sistema e clique em Alterar Senha.</p>
         <p>".$senha."</p>
         <p>Gentileza não responder a esse email.</p>
         <p>Processo Seletivo 2018.</p>";
         sendMail($mail,$subject,$body);
        header("Location: login.php?msn=Foi encaminhada nova senha para seu email!");
    }else{
        header("Location: login.php?msn=Usuário não existe.");
    }

}
?>