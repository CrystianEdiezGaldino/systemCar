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
    <meta name="author" content="Crystian Ediez Galdino">
    <meta name="description" content="Portfólio do desenvolvedor front-end Crystian Ediez Galdino">
    <meta name="keywords" content="portfolio, html, front-end, desenvolvimento, css">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Lista de carros</title>
    <style>
    body {
        overflow: hidden;
        margin: 0;
        background: rgb(0, 0, 0);
        background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(8, 88, 74, 1) 35%, rgba(27, 145, 142, 1) 100%);
    }
    </style>
</head>

<body>
    <div class="offcanvas offcanvas-end" id="demo">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title"><?php echo $_SESSION['nome'];?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">

            <p>Para ter acesso ao Painel é necessário está logado.</p>
            <p>Click em Sair para deslogar.</p>
            <a href="logout.php" class="btn">Sair</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-dark  ">
        <div class="container-fluid ">
            <a class="navbar-brand text-white "><?php echo $_SESSION['nome'];?>
                <p>
            </a>
            <button class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="cadastrar.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" aria-current="page" data-bs-toggle="offcanvas"
                            data-bs-target="#demo" href="">Sair</a>
                    </li>
                </ul>

            </div>
        </div>

    </nav>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 container mt-3">
                <h1 class="p-5  text-white text-center">Lista de Carros</h1>

                <table
                    class="table table-striped table-dark table-bordered table-borderless table-responsive  table-hover ">
                    <thead>
                        <tr>
                        <th class="text-white">Id</th>
                            <th class="text-white">Marca</th>
                            <th class="text-info">Modelo</th>
                            <th class="text-light">Cor</th>
                            <th scope="col">EDITAR</th>
                            <th scope="col">EXCLUIR</th>
                        </tr>
                    </thead>
                    <?php while($dados = $con->fetch_assoc()){ ?>
                    <tbody>
                        <tr>
                             <td class="text-white"><?php echo $dados['id'] ?></td>
                            <td class="text-white"><?php echo $dados['marca'] ?></td>
                            <td class="text-info"><?php echo $dados['modelo'] ?></td>
                            <td class="text-light"><?php echo $dados['cor'] ?></td>
                            <td><a href="editar.php?id=<?php echo $dados['id'];?>"> Editar</a></td>
                            <td><a href="excluir.php?id=<?php echo $dados['id'];?>"> Excluir</a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>