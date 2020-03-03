<?php
    $user = $_REQUEST['user'];

    $host = "localhost";
    $db = "cadastro";
    $db_user = "root";
    $db_password = "coringa";

    $con = new PDO("mysql:host=$host;dbname=$db", 
                    $db_user, 
                    $db_password);



    $stmt = $con->prepare("INSERT INTO users(nome, cpf, rg, endereco, email, senha, data_nascimento) 
                           VALUES (:nome, :cpf, :rg, :endereco, :email, :senha, :data_nascimento)");
    
    $stmt->bindParam(':nome', $user['nome_completo']);
    $stmt->bindParam(':cpf', $user['cpf']);
    $stmt->bindParam(':rg', $user['rg']);
    $stmt->bindParam(':endereco', $user['endereco']);
    $stmt->bindParam(':email', $user['email']);
    $stmt->bindParam(':senha', $user['password']);
    $stmt->bindParam(':data_nascimento', $user['data_nascimento']);

    $stmt->execute();

    header("location: index.php");

?>