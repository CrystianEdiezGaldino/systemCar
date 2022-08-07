
<?php
    include('protect.php');
    include('dbcarslist.php');
    $consultacarros = "SELECT * FROM carros ORDER BY id" ;
    $con = $mysqli->query($consultacarros)or die("SQL ERROR")
  


?>
<!DOCTYPE html>
<html lang="pt-BR">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>LOGADO</title>
    <style>
    body {
        background: rgb(0, 0, 0);
        background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(8, 88, 74, 1) 35%, rgba(27, 145, 142, 1) 100%);
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><?php echo $_SESSION['nome'];?>
                <p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="painel.php">Consultar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="cadastrar.php">Cadastrar</a>
                    </li>
                </ul>
                <div class="position-fixed top-0 end-0">
                    <button type="button" class="btn btn-outline-danger btn-lg  btn-padding-y:1rem"><a class="link"
                            href="logout.php">SAIR</a></button>

                </div>
            </div>
        </div>
    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Collapsed content</h5>
            <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="text-danger">Lista de Carros</h1>
                <table class="table table-bordered table-hover ">
                    <thead>
                        <tr>
                            <td class="text-white">Marca</td>
                            <td class="text-info">Modelo</td>
                            <td class="text-light">Cor</td>
                        </tr>
                    </thead>
                    <?php while($dados = $con->fetch_assoc()){ ?>
                    <tbody>
                        <tr>
                            <td class="text-white"><?php echo $dados['marca'] ?></td>
                            <td class="text-info"><?php echo $dados['modelo'] ?></td>
                            <td class="text-light"><?php echo $dados['cor'] ?></td>
                            <td ><a href="editar.php?id=<?php echo $dados['id'];?>"> Editar</a></td>
                            <td ><a href="excluir.php?id=<?php echo $dados['id'];?>"> Excluir</a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>