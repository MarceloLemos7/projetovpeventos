<?php
session_start();
include_once("conexao.php");

//stmt = comando
$stmt = $conn->prepare("INSERT INTO cadastrotime (nome, email, senha, nomeLider, pais, qtdJogador, cpf, membro1, membro2, membro3, membro4, membro5) VALUES (:NOME, :EMAIL, :SENHA, :NOMELIDER, :PAIS, :QTDJOGADOR, :CPF, :MEMBRO1, :MEMBRO2, :MEMBRO3, :MEMBRO4, :MEMBRO5)");

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

//ligando parametro com o valor "bindParam();"
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

header("Location: ../pages/cadastroTime.php");
// echo "tudo certo chefia";
?>