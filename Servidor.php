<?php
    $Login = $_POST["Login"];
    $Senha = $_POST["Password"];
    if ($Login == "admin" && $Senha == "admin"){
        header("location: Home.html");
    }
    else{
        header("location: Erro.html");
    }
?>