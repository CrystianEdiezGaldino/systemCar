<?php
    $usuario = 'root';
    $senha = '';
    $database = 'dbcarslist';
    $host = 'localhost';
    $mysqli = new mysqli($host,$usuario,$senha,$database);


    if(!$mysqli){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }      
?>