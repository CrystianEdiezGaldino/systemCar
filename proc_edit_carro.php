<?php
session_start();
include_once("dbcarslist.php");
include('protect.php');


$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);


$result_carros = "UPDATE carros SET marca='$marca',modelo='$modelo', cor='$cor' WHERE id='$id'";
$resultado_carros = mysqli_query($mysqli, $result_carros);

if(mysqli_affected_rows($mysqli)){
	$_SESSION['msg'] = "<p style='color:green;'>Carro  editado com sucesso</p>";
	header("Location: painel.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Carro não foi editado, porque nenhum campo foi alterado</p>";
	header("Location: editar.php?id=$id");
}
?>