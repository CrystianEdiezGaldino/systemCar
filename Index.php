<?php
include('dbcarslist.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email'] == 1)){
        echo "Login Inválido";
     
    }else if (strlen($_POST['senha'] == 1)){
        echo "Senha Inválida";
  
    }else{
        $usuario = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email ='$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha no codigo SQL".$mysqli->error);
        $quantidade = $sql_query->num_rows;
 

        if($quantidade == 1){
            
            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header("Location: painel.php");
        }
        else{
            echo"Login ou Senha inválidos";
        }
    }
    

}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN - Cadastro de Carros</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <meta name="author" content="Crystian Ediez Galdino">
    <meta name="description" content="Portfólio do desenvolvedor front-end Crystian Ediez Galdino">
    <meta name="keywords" content="portfolio, html, front-end, desenvolvimento, css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        background: rgb(0, 0, 0);
        background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(8, 88, 74, 1) 35%, rgba(27, 145, 142, 1) 100%);
    }

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
                <form action="index.php" method="POST">
                    <div class="textfield" class="form-group">
                        <label for="usuarios"> Usuário</label>
                        <input class="inputesss" type="text" name="email" placeholder="Digite seu Login"
                            class="form-control">
                    </div>
                    <div class="textfield" class="form-group">
                        <label for="senhas"> Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua Senha" class="form-control">
                    </div>
                    <button type="submit" class="btn-login btn  btn-block ">Login</button>
                    <a href="cadastra_usuario.php" class="btn-login btn">Cadastrar</a>

            </div>
            </form>
        </div>
    </div>

</body>

</html>
