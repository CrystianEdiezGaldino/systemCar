<?php
    include('protect.php');
    include('dbcarslist.php');

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_carros = "SELECT * FROM carros WHERE id = '$id'";
    $resultado_carros =mysqli_query($mysqli, $result_carros);
    $row_carros = mysqli_fetch_assoc($resultado_carros);
  
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Crystian Ediez Galdino">
    <meta name="description" content="Portfólio da desenvolvedor front-end Crystian Ediez Galdino">
    <meta name="keywords" content="portfolio, html, front-end, desenvolvimento, css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <style>
    body {
        overflow: hidden;
        margin: 0;
        background: rgb(0, 0, 0);
        background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(8, 88, 74, 1) 35%, rgba(27, 145, 142, 1) 100%);
    }
    </style>
    <title>Editar Carro</title>
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
            <a href="logout.php" class="btn btn-primary ">Sair</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-dark  ">
        <div class="container-fluid ">
            <a class="navbar-brand text-white "><?php echo $_SESSION['nome'];?>
                <p>
            </a>
            <button class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="painel.php">Consultar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" aria-current="page" href="cadastrar.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " aria-current="page" data-bs-toggle="offcanvas"  data-bs-target="#demo" href="">Sair</a>
                    </li>
                </ul>

              
            </div>
        </div>

    </nav>
    <h1 class="text-white text-center">Editar Carros</h1>
    <br>
    <h2 class="text-white text-center">Insira as novas informações nos campos que deseja em seguida click em no botão
        Editar para realizar as alterções</h2>
    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
    <form method="POST" action="proc_edit_carro.php">
        <input type="hidden" name="id" value="<?php echo $row_carros['id']; ?>">

        <label class="text-white">Marca: </label>
        <input class="textfield form-control" type="text" name="marca" placeholder="Marca"
            value="<?php echo $row_carros['marca']; ?>"><br><br>

        <label class="text-white">Modelo: </label>
        <input class="textfield form-control" type="text" name="modelo" placeholder="Digite o Modelo"
            value="<?php echo $row_carros['modelo']; ?>"><br><br>

        <label class="text-white">Cor:</label>
        <input class="textfield form-control" type="text" name="cor" placeholder="Digite a Cor"
            value="<?php echo $row_carros['cor']; ?>"><br><br>

        <input class="btn-login" type="submit" value="Editar">
        <a href="painel.php" class="btn btn-login btn-lg  btn-padding-y:1rem ">Volta ao Painel</a>
    </form>
    </div>
    </form>
    </div>
</body>

</html>