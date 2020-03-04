<?php
    $id = $_GET['id'];

    $host = "localhost";
    $db = "cadastro";
    $db_user = "root";
    $db_password = "coringa";

    $con = new PDO("mysql:host=$host;dbname=$db", 
                    $db_user, 
                    $db_password);

    $stmt = $con->prepare("DELETE FROM users WHERE id=:id");

    $stmt->bindParam(':id', $id);
    
    $stmt->execute();

    header("location: index.php");

?>