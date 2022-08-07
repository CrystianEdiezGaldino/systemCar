<?php
session_start();
include_once("dbcarslist.php");
include('protect.php');


$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


$result_carros = "DELETE FROM carros WHERE id='$id'";

$resultado_carros = mysqli_query($mysqli, $result_carros);

if(mysqli_affected_rows($mysqli)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário excluido com sucesso</p>";
	header("Location: painel.php");
}else{

	header("Location: painel.php");
}
?>