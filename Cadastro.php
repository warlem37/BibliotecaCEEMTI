<?php
$Login = $_POST["login"];
$Senha = $_POST["senha"];

$filename = "Cadastro.txt";

gravar($Login." ".$Senha."\n");

    header("location: Home.html");
    
function gravar($texto){
	$arquivo = "Cadastro.txt";
	$fp = fopen($arquivo, "a+");
	fwrite($fp, $texto);
	fclose($fp);
}
?>