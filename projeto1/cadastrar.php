<?php
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    $telefone = $_REQUEST['telefone'];
    $nome = $_REQUEST['nome'];
    $sobrenome = $_REQUEST['sobrenome'];
    $salario = $_REQUEST['salario'];
    $numCasa = $_REQUEST['numCasa'];

    echo "
    <!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    <body>
        <div style='display:flex; flex-direction:column;'
            <span>email: {$email}</span>
            <span>senha: {$senha}</span>
            <span>telefone: {$telefone}</span>
            <span>nome: {$nome}</span>
            <span>sobrenome: {$sobrenome}</span>
            <span>salario: {$salario}</span>
            <span>numCasa: {$numCasa}</span>
        </div>
    </body>
    </html>  
    ";
?>
