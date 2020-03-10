<?php 
    session_start();

    $_SESSION['nome'] = 'Mauricio';

    echo "Seu nome é " . $_SESSION['nome'];
?>