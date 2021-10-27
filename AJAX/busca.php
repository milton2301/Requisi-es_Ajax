<?php

header('Content-Type: application/jason');

 $pdo = new PDO('mysql:host=localhost; dbname=cadastro;', 'root', '');


$cad = $pdo->prepare('SELECT * FROM user');
$cad->execute();

if($cad->rowCount() >= 0){
    echo json_encode($cad->fetchAll(PDO::FETCH_ASSOC));
}else{
    echo json_encode('Falho ao buscar usuario');
}

?>