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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <a href="painel.php">Listar</a><br>
    <h1>Cadastra Carros</h1>
    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
    <form method="POST" action="proc_cars_add.php">


        <label>Marca: </label>
        <input type="text" name="marca" placeholder="Marca"><br><br>

        <label>Modelo: </label>
        <input type="text" name="modelo" placeholder="Digite o Modelo"><br><br>

        <label>Cor: </label>
        <input type="text" name="cor" placeholder="Digite a Cor"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    </div>
    </form>
    </div>
</body>

</html>