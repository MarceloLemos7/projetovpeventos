<?php
include("conexao.php");

$stmt = $conn->prepare("SELECT * FROM usuarios ORDER BY nome");

$stmt->execute();

$results2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

 foreach($results2 as $row){

    foreach($row as $key => $value){

        

    }
    
}


?>