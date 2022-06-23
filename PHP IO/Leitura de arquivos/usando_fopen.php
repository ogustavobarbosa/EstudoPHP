<?php

$arquivo = fopen('../arquivoTeste.txt', 'r');

echo feof($arquivo);

while(!feof($arquivo)){
    echo fgets($arquivo);
}

fclose($arquivo);
