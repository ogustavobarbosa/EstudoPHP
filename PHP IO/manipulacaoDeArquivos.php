<?php

$arquivo = fopen('PHP IO/lista.txt', 'r');

echo feof($arquivo);

while(!feof($arquivo)){
    echo fgets($arquivo);
}