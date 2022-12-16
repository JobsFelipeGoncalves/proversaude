<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "proverodonto_novo";
    $porta = "";
    
    $conexao = new PDO("mysql:host=$host;dbname=".$banco, $usuario, $senha);

?>