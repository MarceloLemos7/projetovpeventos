<?php
include("conexao.php");
require '../PDO/init.php';
 
// resgata variáveis do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

//se estiver vazio
 if (empty($nome) && empty($senha))
 {
    //header("Location: ../pages/login.php");
    echo "Informe email e senha";
    exit;
}

 
$sql = $conn->prepare("SELECT * FROM usuarios WHERE nome=:NOME AND senha=:SENHA");
 
$sql->bindParam(':NOME', $nome);
$sql->bindParam(':SENHA', $senha);

$sql->execute();
//sempre setar para linha [0] para trazer uma linha da consulta
$users = $sql->fetchAll(PDO::FETCH_ASSOC)[0];


if (count($users) <= 0)
{
    // header("Location: ../pages/login.php");
    echo "nome ou senha incorretos";
    exit;
}

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $users['id'];
$_SESSION['user_nome'] = $users['nome'];
$_SESSION['user_email'] = $users['email'];
$_SESSION['user_senha'] = $users['senha'];
$_SESSION['user_cpf'] = $users['cpf'];
$_SESSION['user_cel'] = $users['cel'];

header('Location: ../pages/perfil.php');

?>