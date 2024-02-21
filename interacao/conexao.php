<?php 
    $hostname = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "cadastro";

    $mysql = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysql->connect_errno){
        echo "Falha ao conectar: (". $mysqli->connect_errno .")". $mysqli->connect_errno;
    };
?>