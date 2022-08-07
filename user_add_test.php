
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <a href="painel.php">Cadastrar</a><br>
    <a href="painel.php">Listar</a><br>
    <h1>Cadastra Novo Usuário </h1>
    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
    <form method="POST" action="proc_add_user.php">
        
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome" ><br><br>
        <label>Login: </label>
        <input type="text" name="login" placeholder="Login" ><br><br>

        <label>Senha: </label>
        <input type="text" name="senha" placeholder="Senha"><br><br>

        <input type="submit" value="Cadastra Novo Usuário">
    </form>
    </div>
    </form>
    </div>
</body>

</html>