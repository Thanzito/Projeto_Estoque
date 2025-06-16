<?php
$coon = new mysqli("localhost","root","","nomedobanco");
if($conn->connect_error){
    die("Erro na conexão com o banco de dados");
}
?>