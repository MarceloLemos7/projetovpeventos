<?php
session_start();
include_once("conexao.php");

//stmt = comando
$stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, cpf, cel) VALUES (:NOME, :EMAIL, :SENHA, :CPF, :CEL)");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$cel = $_POST["cel"];


$stmt->bindParam(":NOME", $nome);//ligando parametro com o valor "bindParam();"
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":CPF", $cpf);
$stmt->bindParam(":CEL", $cel);

$stmt->execute();

header("Location: ../pages/cadastro.php");

?>