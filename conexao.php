<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $DBname = "bancodedados";
    $conect = mysqli_connect($servidor, $usuario, $senha, $DBname);

    if(!$conect){
        die("falha de conexão: " . mysqli_connect_error());
    }
    echo "<h1>conexão concluida</h1>";
?>
