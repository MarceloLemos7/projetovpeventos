<?php
include("conexao.php");

$stmt = $conn->prepare("SELECT * FROM cadastrotime ORDER BY nome");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

 foreach($results as $row){

    foreach($row as $key => $value){

        

    }
    
}


?>