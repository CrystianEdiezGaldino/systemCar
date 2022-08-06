<?php 
 if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
    die("Acesso negado, realizer o login para ter acesso!!!<p><a href=\"index.php\">Login</a></p>");
}
?>