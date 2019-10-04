<?php

include("conexao.php");


$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$cel = $_POST["cel"];

//echo '<pre>'; var_dump($id); echo '</pre>';exit; 

$stmt = $conn->prepare("UPDATE usuarios SET nome = :NOME, email = :EMAIL, senha = :SENHA, cpf = :CPF, cel = :CEL WHERE id= :ID");



$stmt->bindParam(":NOME", $nome);//ligando parametro com o valor "bindParam();"
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":CPF", $cpf);
$stmt->bindParam(":CEL", $cel);   
$stmt->bindParam(":ID",$id);

$stmt->execute();



if ($stmt->execute())
{
     //echo '<pre>'; var_dump($users); echo '</pre>';exit; 
     header('Location: ../pages/perfil.php');
}

else
{
     echo "Erro ao cadastrar";
     print_r($stmt->errorInfo());
}
 

?>