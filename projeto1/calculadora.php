<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $op = $_GET['op'];
    $result = 0;

    switch($op) {
        case 'soma':
            $result = $num1 + $num2;
        break;

        case 'subtracao':
            $result = $num1 - $num2;
        break;

        case 'multiplicacao':
            $result = $num1 * $num2;
        break;

        case 'divisao':
            $result = $num1 / $num2;
        break;

        default:
            echo "Erro: Não é possível intenficar a operação";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadora.php">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="num1" />
        <br />

        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="num2" />
        <br />

        <label for="operacao">Seleciona a Operação:</label>
        <select name="op" id="operacao">
            <option value="soma">Soma</option>
            <option value="divisao">Divisão</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="subtracao">Subtração</option>
        </select>

        <br /><br />

        <input type="submit" values="Calcular"/>
        <a href="calculadora.php">Limpar Calculadora</a>
        <h1>Resultado: <?= $result ?></h1>
    </form> 
</html>