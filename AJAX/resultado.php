<?php

header('Content-Type: application/jason');

$name = $_POST['name'];
$idade = $_POST['idade'];

 $pdo = new PDO('mysql:host=localhost; dbname=cadastro;', 'root', '');


$cad = $pdo->prepare('INSERT INTO user (name, idade) VALUES (:name, :idade)');

$cad->bindValue(':name', $name);
$cad->bindValue(':idade', $idade);

$cad->execute();

if($cad->rowCount() >= 0){
    echo json_encode('Cadastro realizado com sucesso');
}else{
    echo json_encode('Falho ao cadastrar usuario');
}

/*
if(isset($_POST) && !empty($_POST)){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    
}*/

?>