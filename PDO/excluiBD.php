<?php

include("conexao.php");



//método para se der certo a conexão retornar para a lista novamente 

$stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :ID");

$id = intval($_GET['id']);

$stmt->bindParam(":ID", $id);
$stmt->execute();



// $stmt->bindParam(":NOME", $nome);
// $stmt->bindParam(":EMAIL", $email);
//$stmt->bindParam(":SENHA", $senha);
//ligando parametro com o valor "bindParam();"
// $stmt->bindParam(":CEL", $cel);



header("Location: ../pages/index.php");

?>