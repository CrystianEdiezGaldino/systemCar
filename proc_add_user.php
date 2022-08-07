<?php

include_once("dbcarslist.php");


$nome = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$user = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


$result_adduser = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome', '$user', '$senha')";
$resultado_adduser = mysqli_query($mysqli, $result_adduser);

if(mysqli_affected_rows($mysqli)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastrado Novo Usuário com sucesso</p>";
	header("Location: index.php");
	
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Carro não foi editado com sucesso</p>";
	header("Location: user_add_test.php");
}
?>