<html>
    <head>
        <meta http-equiv="refresh" content="2">
    </head>
    <body>
<?php
$file = fopen("RegistrosLiv.txt", "r+");
if (!$file) {
    exit("Falha ao abrir o arquivo");
}
while (($line = fgets($file)) !== false) {
    echo $line."<br>";
}
if (!feof($file)) {
    exit("Falha inesperada do fgets()");
}
fclose($file);
?>
    </body>
</html>