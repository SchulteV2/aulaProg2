<?php
    $user = $_REQUEST['user'];

    $host = "localhost";
    $db = "cadastro";
    $db_user = "root";
    $db_password = "coringa";

    $con = new PDO("mysql:host=$host;dbname=$db", 
                    $db_user, 
                    $db_password);



    $stmt = $con->prepare("UPDATE users SET :nome WHERE id=:id");

    $stmt->bindParam(':nome', $user['nome_completo']);
    
    $stmt->execute();

    header("location: index.php");

?>