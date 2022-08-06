<?php
    include('protect.php');
    include('dbcarslist.php');
    $consultacarros = "SELECT * FROM carros";
    $con = $mysqli->query($consultacarros)or die("SQL ERROR")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGADO</title>
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
                        <a class="nav-link active" aria-current="page" href="#">Consultar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Editar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Excluir</a>
                    </li>
                </ul>
                <div class="position-fixed top-0 end-0">
                    <button type="button" 
                        class="btn btn-outline-danger btn-lg  btn-padding-y:1rem"><a class="link" href="logout.php">SAIR</a></button>

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
    <div class ="">
    <div  class="position-absolute margin-top: -0.25rem   position-absolute top-50 start-50 translate-middle row col">
        <table>
            <tr>
                <ul class="list-group list-group-horizontal fs-1 shadow-sm p-3 mb-5 bg-body rounded">
                    <li class="list-group-item ">Marca</li>
                    <li class="list-group-item">Modelo</li>
                    <li class="list-group-item">Cor</li>
                </ul>
            </tr>
            <?php while($dados = $con->fetch_assoc()){ ?>
            <tr>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item shadow-sm p-5 mb-5 bg-body rounded"><?php echo $dados['marca'] ?></li>
                    <li class="list-group-item shadow-sm p-5 mb-5 bg-body rounded"><?php echo $dados['modelo'] ?></li>
                    <li class="list-group-item shadow-sm p-5 mb-5 bg-body rounded"><?php echo $dados['cor'] ?></li>
                    <li class="list-group-item shadow-sm p-5 mb-5 bg-body rounded"><a href="editarcarro.php?id=<?php echo $dados['id'];?>"> Editar</a></td>
                    <li class="list-group-item shadow-sm p-5 mb-5 bg-body rounded"><a href="excluircarro.php?id=<?php echo $dados['id'];?>"> Excluir</a></td>

            </tr>
            <?php }?>
        </table>
    </div>
    </div>
</body>

</html>