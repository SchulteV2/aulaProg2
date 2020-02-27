<?php
    $user = $_REQUEST['user'];

    $host = "localhost";
    $db = "cadastro";
    $db_user = "root";
    $db_password = "root";
    // $db_password = "coringa";

    $con = new PDO("mysql:host=$host; dbname=$db", $db_user, $db_password);


    $stmt = $con->prepare("INSERT INTO users(nome, cpf, rg, endereco, email, senha, data_nascimento) 
                            VALUES(:nome, :cpf, :rg, :endereco, :email, :senha, :data_nascimento)");
    $stmt->bindParam(':nome', $user['nome_completo']);
    $stmt->bindParam(':cpf', $user['cpf']);
    $stmt->bindParam(':rg', $user['rg']);
    $stmt->bindParam(':endereco', $user['endereco']);
    $stmt->bindParam(':email', $user['email']);
    $stmt->bindParam(':senha', $user['password']);
    $stmt->bindParam(':data_nascimento', $user['data_nascimento']);

    $rs = $con->query("SELECT id, nome, cpf, rg, endereco, email, senha, data_nascimento FROM users");
    $stmt->execute();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h1>Cadastro</h1>
                <hr />
            </div>
        
            <div class="col-md-12">
                <!--<?php foreach ($user as $attr) :?>
                    <p><?= $attr ?></p>
                <?php endforeach ?>-->
                <?php 
                    while($row = $rs->fetch(PDO::FETCH_OBJ)) {
                        echo "ID de cadastro: " . $row->id . "<br />";
                        echo "Nome: " . $row->nome . "<br />";
                        echo "CPF: " . $row->cpf . "<br />";
                        echo "RG: " . $row->rg . "<br />";
                        echo "Endereço" . $row->endereco . "<br />";
                        echo "Email: " . $row->email . "<br />";
                        echo "Senha: " . $row->senha . "<br />";
                        echo "Data de nascimento: " . $row->data_nascimento . "<br /><br /><br />";
                    }
                ?>

            </div>

        
        
        </div>      
    </div>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
</body>
</html>