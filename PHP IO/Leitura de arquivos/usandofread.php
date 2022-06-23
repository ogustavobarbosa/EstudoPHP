<?php

$arquivo = fopen('../arquivoTeste.txt', 'r');

$tamnhoDoArquivo = filesize('../arquivoTeste.txt');
$texto = fread($arquivo, $tamnhoDoArquivo);

echo $texto;

fclose($arquivo);
