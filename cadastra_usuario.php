<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Crystian Ediez Galdino">
    <meta name="description" content="Portfólio do desenvolvedor front-end Crystian Ediez Galdino">
    <meta name="keywords" content="portfolio, html, front-end, desenvolvimento, css">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        overflow: hidden;
        margin: 0;
        background: rgb(0, 0, 0);
        background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(8, 88, 74, 1) 35%, rgba(27, 145, 142, 1) 100%);
    }
    </style>
    <title>Cadastro de novo Usuário</title>
</head>

<body>

    <h1 class="text-white text-center">Cadastrar Novo Usuário </h1>
    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
    <form method="POST" action="proc_add_user.php">

        <label class="text-white">Nome: </label>
        <input class="textfield form-control" type="text" name="nome" placeholder="Nome"><br><br>
        <label class="text-white">Login: </label>
        <input class="textfield form-control" type="text" name="login" placeholder="Login"><br><br>

        <label class="text-white">Senha: </label>
        <input class="textfield form-control" type="text" name="senha" placeholder="Senha"><br><br>

        <input class="btn-login btn" type="submit" value="Cadastra Novo Usuário">

        <a href="index.php" class="btn-login btn ">Inicio</a>
    </form>
    </div>
    </form>
    </div>
</body>

</html>