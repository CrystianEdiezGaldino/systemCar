<?php
include('dbcarslist.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$passw = filter_input(INPUT_POST, 'passw', FILTER_SANITIZE_STRING);



$result_adduser = "INSERT INTO usuarios (nome,user,passw) VALUES('$nome','$user','$passw')";


$resultado_adduser = mysqli_query($mysqli, $result_adduser);



?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <style>
    body {
        background: rgb(0, 0, 0);
        background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(8, 88, 74, 1) 35%, rgba(27, 145, 142, 1) 100%);
    }
    </style>
    <link rel="stylesheet" href="style.css">
    <style>
    *body {
        margin: 0;
        overflow: hidden;
    }
    </style>
</head>

<body>
    <div class="main-login">
        <div class=" col-4"></div>
        <div class="left-login">
            <h1>Faça o login <br> para acessa a lista de veículos</h1>
            <img src="assets/logosvg.svg" class="left-img" alt="imgcard">
        </div>

        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form action="add_user.php"method="POST" >
                <div class="textfield" class="form-group">
                    <label for="usuarios">Novo Usuário</label>
                    <input type="text" name="user" placeholder="Usuário" class="form-control">
                </div>
                <div class="textfield" class="form-group">
                    <label for="usuarios">Nome</label>
                    <input type="text" name="nome" placeholder="Nome" class="form-control">
                </div>
                <div class="textfield" class="form-group">
                    <label for="senhas"> Senha</label>
                    <input type="password" name="senha" placeholder="Senha" class="form-control">
                </div>
                <button type="submit" class="btn-login btn  btn-block btn-lg">Cadastar</button>
            </div>
            </form>
        </div>
    </div>
</body>

</html>