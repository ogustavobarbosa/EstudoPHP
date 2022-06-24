<?php


$arquivo = fopen('../arquivoTeste.txt', 'a');

$texto = "\nH";

fwrite($arquivo, $texto);

fclose($arquivo);