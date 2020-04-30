<?php
// exercicio 12 - gera um valor de hash (resumo da mensagem)

$str = "Olá";
echo "Saudação: ".$str."<br>";
echo "TRUE - formato binario de 20 caracteres brutos: ".sha1($str, TRUE)."<br>";
echo "FALSE - 40 caracteres de numero hexadecimal: ".sha1($str)."<br>";
?>