<?php
//exercicio 13 -  Cria um diretório

$htdocs= getcwd(); 

if (!file_exists('upload/diretorio')) {
    mkdir('upload/diretorio', 0777, true);
}

?>