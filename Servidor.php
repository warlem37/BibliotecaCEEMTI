<?php
    $login = $_POST["Login"];
    $senha = $_POST["Password"];
    if ($login == "admin" && $senha == "admin"){
        header("location: Home.html");
    }
    else{
        header("location: Erro.html");
    }
?>