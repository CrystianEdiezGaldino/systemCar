<?php
session_start();
include_once("dbcarslist.php");
include('protect.php');


$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);


$result_carros = "INSERT INTO carros (marca,modelo,cor) VALUES('$marca','$modelo','$cor')";
//"INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
//"INSERT INTO $this->table (name,email,phone) VALUES (:name, :email, :phone)";
$resultado_carros = mysqli_query($mysqli, $result_carros);

if(mysqli_affected_rows($mysqli)){
	$_SESSION['msg'] = "<p style='color:green;'>Carro  editado com sucesso</p>";
	header("Location: painel.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Não é permitido campos em branco</p>";
	header("Location: cadastrar.php");
}
?>