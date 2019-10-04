<?php

include("conexao.php");


$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$nomeLider = $_POST["nomeLider"];
$pais = $_POST["pais"];
$qtdJogador = $_POST["qtdJogador"];
$cpf = $_POST["cpf"];
$membro1 = $_POST["membro1"];
$membro2 = $_POST["membro2"];
$membro3 = $_POST["membro3"];
$membro4 = $_POST["membro4"];
$membro5 = $_POST["membro5"];

$stmt = $conn->prepare("UPDATE cadastrotime SET nome= :NOME, email= :EMAIL, senha= :SENHA, nomeLider= :NOMELIDER, pais= :PAIS, qtdJogador= :QTDJOGADOR cpf= :CPF, membro1= :MEMBRO1, membro2= :MEMBRO2, membro3= :MEMBRO3, membro4= :MEMBRO4, membro5= :MEMBRO5 WHERE id = :ID");

//ligando parametro com o valor "bindParam();"
$stmt->bindParam(":ID", $id);
$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":NOMELIDER", $nomeLider);
$stmt->bindParam(":PAIS", $pais);
$stmt->bindParam(":QTDJOGADOR", $qtdJogador);
$stmt->bindParam(":CPF", $cpf);
$stmt->bindParam(":MEMBRO1", $membro1);
$stmt->bindParam(":MEMBRO2", $membro2);
$stmt->bindParam(":MEMBRO3", $membro3);
$stmt->bindParam(":MEMBRO4", $membro4);
$stmt->bindParam(":MEMBRO5", $membro5);
$stmt->execute();



if ($stmt->execute())
{
header('Location: ../pages/index.php');
}

else
{
     echo "Erro ao cadastrar";
     print_r($stmt->errorInfo());
}
 

?>