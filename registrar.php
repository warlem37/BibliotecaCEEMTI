<?php
$TituloLiv = $_POST["liv_titulo"];
$Autor = $_POST["autor"];
$Editora = $_POST["editora"];
$DataLanc = $_POST["data"];
$NumPagina = $_POST["num_pagina"];

$filename = "RegistrosLiv.txt";

gravar("Titulo : ".$TituloLiv." Autor : ".$Autor." Editora : ".$Editora." Data de lancamento : ".$DataLanc." Numero de pagina : ".$NumPagina."\n");

echo "<p> Registro feito com sucesso</p>";
echo "<a href='Cad_Livro.html'> Fazer outro registro </a>";

function gravar($texto){
	$arquivo = "RegistrosLiv.txt";
	$fp = fopen($arquivo, "a+");
	fwrite($fp, $texto);
	fclose($fp);
}
?>